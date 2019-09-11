<?php
/**
 * Created by PhpStorm.
 * User: ddiallo
 * Date: 9/9/19
 * Time: 4:10 PM
 */

namespace Drupal\indicators_generator\Util;

class IndicatorsGenUtility {

  public static function getTermName($tid) {

      $query = \Drupal::database()->select('taxonomy_term_field_data', 'td');
      $query->addField('td', 'name');
      $query->condition('td.tid', $tid);
      $term = $query->execute();
      $tname = $term->fetchField();

      return $tname;
}
}
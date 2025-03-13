<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DLSkewedInfo extends Model
{
    /**
     * @var string[]
     */
    public $skewedColNames;

    /**
     * @var mixed[]
     */
    public $skewedColValueLocationMaps;

    /**
     * @var string[][]
     */
    public $skewedColValues;
    protected $_name = [
        'skewedColNames' => 'SkewedColNames',
        'skewedColValueLocationMaps' => 'SkewedColValueLocationMaps',
        'skewedColValues' => 'SkewedColValues',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->skewedColNames) {
            $res['SkewedColNames'] = $this->skewedColNames;
        }
        if (null !== $this->skewedColValueLocationMaps) {
            $res['SkewedColValueLocationMaps'] = $this->skewedColValueLocationMaps;
        }
        if (null !== $this->skewedColValues) {
            $res['SkewedColValues'] = $this->skewedColValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DLSkewedInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkewedColNames'])) {
            if (!empty($map['SkewedColNames'])) {
                $model->skewedColNames = $map['SkewedColNames'];
            }
        }
        if (isset($map['SkewedColValueLocationMaps'])) {
            $model->skewedColValueLocationMaps = $map['SkewedColValueLocationMaps'];
        }
        if (isset($map['SkewedColValues'])) {
            if (!empty($map['SkewedColValues'])) {
                $model->skewedColValues = $map['SkewedColValues'];
            }
        }

        return $model;
    }
}

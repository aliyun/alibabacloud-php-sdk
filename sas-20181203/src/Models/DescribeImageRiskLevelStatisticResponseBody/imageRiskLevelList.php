<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRiskLevelStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class imageRiskLevelList extends Model
{
    /**
     * @description The count of images for this risk level.
     *
     * @example 12
     *
     * @var int
     */
    public $cnt;

    /**
     * @description The image risk level. Valid values：
     * - **3**：High
     * - **2**：Medium
     * - **1**：Low
     * - **0**：None
     *
     * @example 0
     *
     * @var string
     */
    public $imageRiskLevel;
    protected $_name = [
        'cnt' => 'Cnt',
        'imageRiskLevel' => 'ImageRiskLevel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnt) {
            $res['Cnt'] = $this->cnt;
        }
        if (null !== $this->imageRiskLevel) {
            $res['ImageRiskLevel'] = $this->imageRiskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageRiskLevelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cnt'])) {
            $model->cnt = $map['Cnt'];
        }
        if (isset($map['ImageRiskLevel'])) {
            $model->imageRiskLevel = $map['ImageRiskLevel'];
        }

        return $model;
    }
}

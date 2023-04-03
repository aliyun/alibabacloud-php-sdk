<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcBMDResponseBody\data;

use AlibabaCloud\Tea\Model;

class detections extends Model
{
    /**
     * @example 0.78
     *
     * @var float
     */
    public $vertBMD;

    /**
     * @example NaN
     *
     * @var float
     */
    public $vertCategory;

    /**
     * @example L1
     *
     * @var string
     */
    public $vertId;

    /**
     * @example -2.5
     *
     * @var float
     */
    public $vertTScore;

    /**
     * @example NaN
     *
     * @var float
     */
    public $vertZScore;
    protected $_name = [
        'vertBMD'      => 'VertBMD',
        'vertCategory' => 'VertCategory',
        'vertId'       => 'VertId',
        'vertTScore'   => 'VertTScore',
        'vertZScore'   => 'VertZScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vertBMD) {
            $res['VertBMD'] = $this->vertBMD;
        }
        if (null !== $this->vertCategory) {
            $res['VertCategory'] = $this->vertCategory;
        }
        if (null !== $this->vertId) {
            $res['VertId'] = $this->vertId;
        }
        if (null !== $this->vertTScore) {
            $res['VertTScore'] = $this->vertTScore;
        }
        if (null !== $this->vertZScore) {
            $res['VertZScore'] = $this->vertZScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VertBMD'])) {
            $model->vertBMD = $map['VertBMD'];
        }
        if (isset($map['VertCategory'])) {
            $model->vertCategory = $map['VertCategory'];
        }
        if (isset($map['VertId'])) {
            $model->vertId = $map['VertId'];
        }
        if (isset($map['VertTScore'])) {
            $model->vertTScore = $map['VertTScore'];
        }
        if (isset($map['VertZScore'])) {
            $model->vertZScore = $map['VertZScore'];
        }

        return $model;
    }
}

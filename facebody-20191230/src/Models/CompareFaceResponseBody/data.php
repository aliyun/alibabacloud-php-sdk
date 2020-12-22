<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float[]
     */
    public $thresholds;

    /**
     * @var int[]
     */
    public $rectBList;

    /**
     * @var float
     */
    public $confidence;

    /**
     * @var int[]
     */
    public $rectAList;
    protected $_name = [
        'thresholds' => 'Thresholds',
        'rectBList'  => 'RectBList',
        'confidence' => 'Confidence',
        'rectAList'  => 'RectAList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thresholds) {
            $res['Thresholds'] = $this->thresholds;
        }
        if (null !== $this->rectBList) {
            $res['RectBList'] = $this->rectBList;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->rectAList) {
            $res['RectAList'] = $this->rectAList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Thresholds'])) {
            if (!empty($map['Thresholds'])) {
                $model->thresholds = $map['Thresholds'];
            }
        }
        if (isset($map['RectBList'])) {
            if (!empty($map['RectBList'])) {
                $model->rectBList = $map['RectBList'];
            }
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['RectAList'])) {
            if (!empty($map['RectAList'])) {
                $model->rectAList = $map['RectAList'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByNameResponseBody\data;

use AlibabaCloud\Tea\Model;

class picInfos extends Model
{
    /**
     * @var int[]
     */
    public $bbox;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $confidence;
    protected $_name = [
        'bbox'       => 'Bbox',
        'confidence' => 'Confidence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bbox) {
            $res['Bbox'] = $this->bbox;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return picInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bbox'])) {
            if (!empty($map['Bbox'])) {
                $model->bbox = $map['Bbox'];
            }
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        return $model;
    }
}

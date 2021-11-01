<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data\elements\property;

use AlibabaCloud\Tea\Model;

class probability extends Model
{
    /**
     * @var float
     */
    public $no;

    /**
     * @var int
     */
    public $threshold;

    /**
     * @var float
     */
    public $unknown;

    /**
     * @var float
     */
    public $yes;
    protected $_name = [
        'no'        => 'No',
        'threshold' => 'Threshold',
        'unknown'   => 'Unknown',
        'yes'       => 'Yes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->no) {
            $res['No'] = $this->no;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->unknown) {
            $res['Unknown'] = $this->unknown;
        }
        if (null !== $this->yes) {
            $res['Yes'] = $this->yes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return probability
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['No'])) {
            $model->no = $map['No'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Unknown'])) {
            $model->unknown = $map['Unknown'];
        }
        if (isset($map['Yes'])) {
            $model->yes = $map['Yes'];
        }

        return $model;
    }
}

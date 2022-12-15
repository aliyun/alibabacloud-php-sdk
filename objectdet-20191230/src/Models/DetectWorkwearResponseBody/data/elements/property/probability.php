<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponseBody\data\elements\property;

use AlibabaCloud\Tea\Model;

class probability extends Model
{
    /**
     * @example 0.00036084422
     *
     * @var float
     */
    public $no;

    /**
     * @example 0
     *
     * @var int
     */
    public $threshold;

    /**
     * @example 0.0006906331
     *
     * @var float
     */
    public $unknown;

    /**
     * @example 0.9989485
     *
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

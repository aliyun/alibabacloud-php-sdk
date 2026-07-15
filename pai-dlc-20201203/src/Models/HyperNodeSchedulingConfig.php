<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class HyperNodeSchedulingConfig extends Model
{
    /**
     * @var int
     */
    public $minAvailable;

    /**
     * @var string
     */
    public $qualityPolicy;
    protected $_name = [
        'minAvailable' => 'MinAvailable',
        'qualityPolicy' => 'QualityPolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->minAvailable) {
            $res['MinAvailable'] = $this->minAvailable;
        }

        if (null !== $this->qualityPolicy) {
            $res['QualityPolicy'] = $this->qualityPolicy;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MinAvailable'])) {
            $model->minAvailable = $map['MinAvailable'];
        }

        if (isset($map['QualityPolicy'])) {
            $model->qualityPolicy = $map['QualityPolicy'];
        }

        return $model;
    }
}

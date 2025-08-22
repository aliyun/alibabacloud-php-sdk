<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class WafQuotaInteger extends Model
{
    /**
     * @var int
     */
    public $equal;

    /**
     * @var int
     */
    public $greaterThan;

    /**
     * @var int
     */
    public $greaterThanOrEqual;

    /**
     * @var int
     */
    public $lessThan;

    /**
     * @var int
     */
    public $lessThanOrEqual;
    protected $_name = [
        'equal' => 'Equal',
        'greaterThan' => 'GreaterThan',
        'greaterThanOrEqual' => 'GreaterThanOrEqual',
        'lessThan' => 'LessThan',
        'lessThanOrEqual' => 'LessThanOrEqual',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->equal) {
            $res['Equal'] = $this->equal;
        }

        if (null !== $this->greaterThan) {
            $res['GreaterThan'] = $this->greaterThan;
        }

        if (null !== $this->greaterThanOrEqual) {
            $res['GreaterThanOrEqual'] = $this->greaterThanOrEqual;
        }

        if (null !== $this->lessThan) {
            $res['LessThan'] = $this->lessThan;
        }

        if (null !== $this->lessThanOrEqual) {
            $res['LessThanOrEqual'] = $this->lessThanOrEqual;
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
        if (isset($map['Equal'])) {
            $model->equal = $map['Equal'];
        }

        if (isset($map['GreaterThan'])) {
            $model->greaterThan = $map['GreaterThan'];
        }

        if (isset($map['GreaterThanOrEqual'])) {
            $model->greaterThanOrEqual = $map['GreaterThanOrEqual'];
        }

        if (isset($map['LessThan'])) {
            $model->lessThan = $map['LessThan'];
        }

        if (isset($map['LessThanOrEqual'])) {
            $model->lessThanOrEqual = $map['LessThanOrEqual'];
        }

        return $model;
    }
}

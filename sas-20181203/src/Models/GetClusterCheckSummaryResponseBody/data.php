<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterCheckSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $notPassCount;

    /**
     * @var int
     */
    public $notPassHighCount;

    /**
     * @var int
     */
    public $notPassLowCount;

    /**
     * @var int
     */
    public $notPassMediumCount;
    protected $_name = [
        'notPassCount' => 'NotPassCount',
        'notPassHighCount' => 'NotPassHighCount',
        'notPassLowCount' => 'NotPassLowCount',
        'notPassMediumCount' => 'NotPassMediumCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notPassCount) {
            $res['NotPassCount'] = $this->notPassCount;
        }

        if (null !== $this->notPassHighCount) {
            $res['NotPassHighCount'] = $this->notPassHighCount;
        }

        if (null !== $this->notPassLowCount) {
            $res['NotPassLowCount'] = $this->notPassLowCount;
        }

        if (null !== $this->notPassMediumCount) {
            $res['NotPassMediumCount'] = $this->notPassMediumCount;
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
        if (isset($map['NotPassCount'])) {
            $model->notPassCount = $map['NotPassCount'];
        }

        if (isset($map['NotPassHighCount'])) {
            $model->notPassHighCount = $map['NotPassHighCount'];
        }

        if (isset($map['NotPassLowCount'])) {
            $model->notPassLowCount = $map['NotPassLowCount'];
        }

        if (isset($map['NotPassMediumCount'])) {
            $model->notPassMediumCount = $map['NotPassMediumCount'];
        }

        return $model;
    }
}

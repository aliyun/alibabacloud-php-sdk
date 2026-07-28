<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeApplicationUsageRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $days;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'days' => 'Days',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->days) {
            $res['Days'] = $this->days;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }

        return $model;
    }
}

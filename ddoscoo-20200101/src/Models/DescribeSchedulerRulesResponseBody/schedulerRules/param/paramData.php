<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules\param;

use AlibabaCloud\Dara\Model;

class paramData extends Model
{
    /**
     * @var string
     */
    public $cloudInstanceId;
    protected $_name = [
        'cloudInstanceId' => 'CloudInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudInstanceId) {
            $res['CloudInstanceId'] = $this->cloudInstanceId;
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
        if (isset($map['CloudInstanceId'])) {
            $model->cloudInstanceId = $map['CloudInstanceId'];
        }

        return $model;
    }
}

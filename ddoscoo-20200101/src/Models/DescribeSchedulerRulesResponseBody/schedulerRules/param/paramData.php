<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules\param;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudInstanceId) {
            $res['CloudInstanceId'] = $this->cloudInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudInstanceId'])) {
            $model->cloudInstanceId = $map['CloudInstanceId'];
        }

        return $model;
    }
}

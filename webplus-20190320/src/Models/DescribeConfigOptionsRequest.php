<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigOptionsRequest extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $profileName;
    protected $_name = [
        'stackId'     => 'StackId',
        'envId'       => 'EnvId',
        'profileName' => 'ProfileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->profileName) {
            $res['ProfileName'] = $this->profileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigOptionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['ProfileName'])) {
            $model->profileName = $map['ProfileName'];
        }

        return $model;
    }
}

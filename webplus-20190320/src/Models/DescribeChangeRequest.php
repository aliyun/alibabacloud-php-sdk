<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeChangeRequest extends Model
{
    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $changeId;
    protected $_name = [
        'envId'    => 'EnvId',
        'changeId' => 'ChangeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->changeId) {
            $res['ChangeId'] = $this->changeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['ChangeId'])) {
            $model->changeId = $map['ChangeId'];
        }

        return $model;
    }
}

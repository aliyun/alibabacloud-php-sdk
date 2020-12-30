<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\RebuildAppEnvResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\RebuildAppEnvResponseBody\envChangeDetail\operations;
use AlibabaCloud\Tea\Model;

class envChangeDetail extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $changeId;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var operations
     */
    public $operations;
    protected $_name = [
        'startTime'  => 'StartTime',
        'changeId'   => 'ChangeId',
        'envId'      => 'EnvId',
        'operations' => 'Operations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->changeId) {
            $res['ChangeId'] = $this->changeId;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->operations) {
            $res['Operations'] = null !== $this->operations ? $this->operations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envChangeDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ChangeId'])) {
            $model->changeId = $map['ChangeId'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['Operations'])) {
            $model->operations = operations::fromMap($map['Operations']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidDataProcessesRequest\dataProcessTime;
use AlibabaCloud\Tea\Model;

class CreatePidDataProcessesRequest extends Model
{
    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var string
     */
    public $pidLoopId;

    /**
     * @var dataProcessTime[]
     */
    public $dataProcessTime;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'pidProjectId'    => 'PidProjectId',
        'pidLoopId'       => 'PidLoopId',
        'dataProcessTime' => 'DataProcessTime',
        'clientToken'     => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
        Model::validateRequired('dataProcessTime', $this->dataProcessTime, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }
        if (null !== $this->dataProcessTime) {
            $res['DataProcessTime'] = [];
            if (null !== $this->dataProcessTime && \is_array($this->dataProcessTime)) {
                $n = 0;
                foreach ($this->dataProcessTime as $item) {
                    $res['DataProcessTime'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePidDataProcessesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }
        if (isset($map['DataProcessTime'])) {
            if (!empty($map['DataProcessTime'])) {
                $model->dataProcessTime = [];
                $n                      = 0;
                foreach ($map['DataProcessTime'] as $item) {
                    $model->dataProcessTime[$n++] = null !== $item ? dataProcessTime::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}

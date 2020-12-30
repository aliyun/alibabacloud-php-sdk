<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteProtocolOspfResponseBody\taskStates;
use AlibabaCloud\Tea\Model;

class DescribeSagRouteProtocolOspfResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $deadTime;

    /**
     * @var int
     */
    public $md5KeyId;

    /**
     * @var string
     */
    public $areaId;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var int
     */
    public $helloTime;

    /**
     * @var string
     */
    public $areaType;

    /**
     * @var taskStates[]
     */
    public $taskStates;

    /**
     * @var string
     */
    public $md5Key;

    /**
     * @var string
     */
    public $authenticationType;
    protected $_name = [
        'requestId'          => 'RequestId',
        'deadTime'           => 'DeadTime',
        'md5KeyId'           => 'Md5KeyId',
        'areaId'             => 'AreaId',
        'routerId'           => 'RouterId',
        'helloTime'          => 'HelloTime',
        'areaType'           => 'AreaType',
        'taskStates'         => 'TaskStates',
        'md5Key'             => 'Md5Key',
        'authenticationType' => 'AuthenticationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->deadTime) {
            $res['DeadTime'] = $this->deadTime;
        }
        if (null !== $this->md5KeyId) {
            $res['Md5KeyId'] = $this->md5KeyId;
        }
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->helloTime) {
            $res['HelloTime'] = $this->helloTime;
        }
        if (null !== $this->areaType) {
            $res['AreaType'] = $this->areaType;
        }
        if (null !== $this->taskStates) {
            $res['TaskStates'] = [];
            if (null !== $this->taskStates && \is_array($this->taskStates)) {
                $n = 0;
                foreach ($this->taskStates as $item) {
                    $res['TaskStates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->md5Key) {
            $res['Md5Key'] = $this->md5Key;
        }
        if (null !== $this->authenticationType) {
            $res['AuthenticationType'] = $this->authenticationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagRouteProtocolOspfResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeadTime'])) {
            $model->deadTime = $map['DeadTime'];
        }
        if (isset($map['Md5KeyId'])) {
            $model->md5KeyId = $map['Md5KeyId'];
        }
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['HelloTime'])) {
            $model->helloTime = $map['HelloTime'];
        }
        if (isset($map['AreaType'])) {
            $model->areaType = $map['AreaType'];
        }
        if (isset($map['TaskStates'])) {
            if (!empty($map['TaskStates'])) {
                $model->taskStates = [];
                $n                 = 0;
                foreach ($map['TaskStates'] as $item) {
                    $model->taskStates[$n++] = null !== $item ? taskStates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Md5Key'])) {
            $model->md5Key = $map['Md5Key'];
        }
        if (isset($map['AuthenticationType'])) {
            $model->authenticationType = $map['AuthenticationType'];
        }

        return $model;
    }
}

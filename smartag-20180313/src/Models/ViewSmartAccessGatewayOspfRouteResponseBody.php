<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ViewSmartAccessGatewayOspfRouteResponseBody\taskStates;

class ViewSmartAccessGatewayOspfRouteResponseBody extends Model
{
    /**
     * @var int
     */
    public $areaId;

    /**
     * @var string
     */
    public $authenticationType;

    /**
     * @var int
     */
    public $deadTime;

    /**
     * @var int
     */
    public $helloTime;

    /**
     * @var string
     */
    public $md5Key;

    /**
     * @var int
     */
    public $md5KeyId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var taskStates[]
     */
    public $taskStates;
    protected $_name = [
        'areaId' => 'AreaId',
        'authenticationType' => 'AuthenticationType',
        'deadTime' => 'DeadTime',
        'helloTime' => 'HelloTime',
        'md5Key' => 'Md5Key',
        'md5KeyId' => 'Md5KeyId',
        'requestId' => 'RequestId',
        'routerId' => 'RouterId',
        'taskStates' => 'TaskStates',
    ];

    public function validate()
    {
        if (\is_array($this->taskStates)) {
            Model::validateArray($this->taskStates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }

        if (null !== $this->authenticationType) {
            $res['AuthenticationType'] = $this->authenticationType;
        }

        if (null !== $this->deadTime) {
            $res['DeadTime'] = $this->deadTime;
        }

        if (null !== $this->helloTime) {
            $res['HelloTime'] = $this->helloTime;
        }

        if (null !== $this->md5Key) {
            $res['Md5Key'] = $this->md5Key;
        }

        if (null !== $this->md5KeyId) {
            $res['Md5KeyId'] = $this->md5KeyId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }

        if (null !== $this->taskStates) {
            if (\is_array($this->taskStates)) {
                $res['TaskStates'] = [];
                $n1 = 0;
                foreach ($this->taskStates as $item1) {
                    $res['TaskStates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }

        if (isset($map['AuthenticationType'])) {
            $model->authenticationType = $map['AuthenticationType'];
        }

        if (isset($map['DeadTime'])) {
            $model->deadTime = $map['DeadTime'];
        }

        if (isset($map['HelloTime'])) {
            $model->helloTime = $map['HelloTime'];
        }

        if (isset($map['Md5Key'])) {
            $model->md5Key = $map['Md5Key'];
        }

        if (isset($map['Md5KeyId'])) {
            $model->md5KeyId = $map['Md5KeyId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }

        if (isset($map['TaskStates'])) {
            if (!empty($map['TaskStates'])) {
                $model->taskStates = [];
                $n1 = 0;
                foreach ($map['TaskStates'] as $item1) {
                    $model->taskStates[$n1] = taskStates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

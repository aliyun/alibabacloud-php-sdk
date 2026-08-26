<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListTrustedOriginsResponseBody;

use AlibabaCloud\Dara\Model;

class trustedOrigins extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trustOriginName;

    /**
     * @var string
     */
    public $trustedOriginId;

    /**
     * @var string[]
     */
    public $trustedOriginScene;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'origin' => 'Origin',
        'status' => 'Status',
        'trustOriginName' => 'TrustOriginName',
        'trustedOriginId' => 'TrustedOriginId',
        'trustedOriginScene' => 'TrustedOriginScene',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->trustedOriginScene)) {
            Model::validateArray($this->trustedOriginScene);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->trustOriginName) {
            $res['TrustOriginName'] = $this->trustOriginName;
        }

        if (null !== $this->trustedOriginId) {
            $res['TrustedOriginId'] = $this->trustedOriginId;
        }

        if (null !== $this->trustedOriginScene) {
            if (\is_array($this->trustedOriginScene)) {
                $res['TrustedOriginScene'] = [];
                $n1 = 0;
                foreach ($this->trustedOriginScene as $item1) {
                    $res['TrustedOriginScene'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TrustOriginName'])) {
            $model->trustOriginName = $map['TrustOriginName'];
        }

        if (isset($map['TrustedOriginId'])) {
            $model->trustedOriginId = $map['TrustedOriginId'];
        }

        if (isset($map['TrustedOriginScene'])) {
            if (!empty($map['TrustedOriginScene'])) {
                $model->trustedOriginScene = [];
                $n1 = 0;
                foreach ($map['TrustedOriginScene'] as $item1) {
                    $model->trustedOriginScene[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

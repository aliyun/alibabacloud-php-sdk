<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateTrustedOriginRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
    public $trustOriginName;

    /**
     * @var string[]
     */
    public $trustedOriginScene;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'instanceId' => 'InstanceId',
        'origin' => 'Origin',
        'trustOriginName' => 'TrustOriginName',
        'trustedOriginScene' => 'TrustedOriginScene',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->trustOriginName) {
            $res['TrustOriginName'] = $this->trustOriginName;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['TrustOriginName'])) {
            $model->trustOriginName = $map['TrustOriginName'];
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

        return $model;
    }
}

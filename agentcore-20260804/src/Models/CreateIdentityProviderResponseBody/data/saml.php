<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderResponseBody\data;

use AlibabaCloud\Dara\Model;

class saml extends Model
{
    /**
     * @var string
     */
    public $bindingType;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var bool
     */
    public $jitProvisionEnabled;

    /**
     * @var bool
     */
    public $jitUpdateEnabled;

    /**
     * @var string
     */
    public $loginUrl;

    /**
     * @var string[]
     */
    public $x509Certificates;
    protected $_name = [
        'bindingType' => 'bindingType',
        'entityId' => 'entityId',
        'jitProvisionEnabled' => 'jitProvisionEnabled',
        'jitUpdateEnabled' => 'jitUpdateEnabled',
        'loginUrl' => 'loginUrl',
        'x509Certificates' => 'x509Certificates',
    ];

    public function validate()
    {
        if (\is_array($this->x509Certificates)) {
            Model::validateArray($this->x509Certificates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingType) {
            $res['bindingType'] = $this->bindingType;
        }

        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }

        if (null !== $this->jitProvisionEnabled) {
            $res['jitProvisionEnabled'] = $this->jitProvisionEnabled;
        }

        if (null !== $this->jitUpdateEnabled) {
            $res['jitUpdateEnabled'] = $this->jitUpdateEnabled;
        }

        if (null !== $this->loginUrl) {
            $res['loginUrl'] = $this->loginUrl;
        }

        if (null !== $this->x509Certificates) {
            if (\is_array($this->x509Certificates)) {
                $res['x509Certificates'] = [];
                $n1 = 0;
                foreach ($this->x509Certificates as $item1) {
                    $res['x509Certificates'][$n1] = $item1;
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
        if (isset($map['bindingType'])) {
            $model->bindingType = $map['bindingType'];
        }

        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }

        if (isset($map['jitProvisionEnabled'])) {
            $model->jitProvisionEnabled = $map['jitProvisionEnabled'];
        }

        if (isset($map['jitUpdateEnabled'])) {
            $model->jitUpdateEnabled = $map['jitUpdateEnabled'];
        }

        if (isset($map['loginUrl'])) {
            $model->loginUrl = $map['loginUrl'];
        }

        if (isset($map['x509Certificates'])) {
            if (!empty($map['x509Certificates'])) {
                $model->x509Certificates = [];
                $n1 = 0;
                foreach ($map['x509Certificates'] as $item1) {
                    $model->x509Certificates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

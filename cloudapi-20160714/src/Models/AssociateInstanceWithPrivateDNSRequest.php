<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class AssociateInstanceWithPrivateDNSRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string[]
     */
    public $intranetDomains;
    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'intranetDomains' => 'IntranetDomains',
        'securityToken'   => 'SecurityToken',
    ];

    public function validate()
    {
        if (\is_array($this->intranetDomains)) {
            Model::validateArray($this->intranetDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->intranetDomains) {
            if (\is_array($this->intranetDomains)) {
                $res['IntranetDomains'] = [];
                $n1                     = 0;
                foreach ($this->intranetDomains as $item1) {
                    $res['IntranetDomains'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IntranetDomains'])) {
            if (!empty($map['IntranetDomains'])) {
                $model->intranetDomains = [];
                $n1                     = 0;
                foreach ($map['IntranetDomains'] as $item1) {
                    $model->intranetDomains[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

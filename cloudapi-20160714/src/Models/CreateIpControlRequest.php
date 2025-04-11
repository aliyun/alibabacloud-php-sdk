<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlRequest\ipControlPolicys;

class CreateIpControlRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ipControlName;

    /**
     * @var ipControlPolicys[]
     */
    public $ipControlPolicys;

    /**
     * @var string
     */
    public $ipControlType;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'description' => 'Description',
        'ipControlName' => 'IpControlName',
        'ipControlPolicys' => 'IpControlPolicys',
        'ipControlType' => 'IpControlType',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        if (\is_array($this->ipControlPolicys)) {
            Model::validateArray($this->ipControlPolicys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ipControlName) {
            $res['IpControlName'] = $this->ipControlName;
        }

        if (null !== $this->ipControlPolicys) {
            if (\is_array($this->ipControlPolicys)) {
                $res['IpControlPolicys'] = [];
                $n1 = 0;
                foreach ($this->ipControlPolicys as $item1) {
                    $res['IpControlPolicys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ipControlType) {
            $res['IpControlType'] = $this->ipControlType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IpControlName'])) {
            $model->ipControlName = $map['IpControlName'];
        }

        if (isset($map['IpControlPolicys'])) {
            if (!empty($map['IpControlPolicys'])) {
                $model->ipControlPolicys = [];
                $n1 = 0;
                foreach ($map['IpControlPolicys'] as $item1) {
                    $model->ipControlPolicys[$n1++] = ipControlPolicys::fromMap($item1);
                }
            }
        }

        if (isset($map['IpControlType'])) {
            $model->ipControlType = $map['IpControlType'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

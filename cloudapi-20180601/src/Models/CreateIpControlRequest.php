<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateIpControlRequest\ipControlPolicys;
use AlibabaCloud\Tea\Model;

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
        'description'      => 'Description',
        'ipControlName'    => 'IpControlName',
        'ipControlPolicys' => 'IpControlPolicys',
        'ipControlType'    => 'IpControlType',
        'securityToken'    => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipControlName) {
            $res['IpControlName'] = $this->ipControlName;
        }
        if (null !== $this->ipControlPolicys) {
            $res['IpControlPolicys'] = [];
            if (null !== $this->ipControlPolicys && \is_array($this->ipControlPolicys)) {
                $n = 0;
                foreach ($this->ipControlPolicys as $item) {
                    $res['IpControlPolicys'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CreateIpControlRequest
     */
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
                $n                       = 0;
                foreach ($map['IpControlPolicys'] as $item) {
                    $model->ipControlPolicys[$n++] = null !== $item ? ipControlPolicys::fromMap($item) : $item;
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlRequest\ipControlPolicys;
use AlibabaCloud\Tea\Model;

class CreateIpControlRequest extends Model
{
    /**
     * @description The description. The description can be up to 200 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the ACL. The name must be 4 to 50 characters in length, and can contain letters, digits, and underscores (_). The name cannot start with an underscore (_).``
     *
     * This parameter is required.
     * @example controlNameTest
     *
     * @var string
     */
    public $ipControlName;

    /**
     * @description The information about the policies. The information is an array of ipcontrolpolicys data.
     *
     * @var ipControlPolicys[]
     */
    public $ipControlPolicys;

    /**
     * @description The type of the ACL. Valid values:
     *
     *   **ALLOW**: an IP address whitelist
     *   **REFUSE**: an IP address blacklist
     *
     * This parameter is required.
     * @example ALLOW
     *
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

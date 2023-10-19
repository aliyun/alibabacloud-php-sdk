<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyIpControlRequest extends Model
{
    /**
     * @description The description. The description can be up to 200 characters in length.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the ACL. The ID is unique.
     *
     * @example 7ea91319a34d48a09b5c9c871d9768b1
     *
     * @var string
     */
    public $ipControlId;

    /**
     * @description The name of the ACL. The name must be 4 to 50 characters in length, and can contain letters, digits, and underscores (\_). The name cannot start with an underscore (\_).
     *
     * @example testControl11
     *
     * @var string
     */
    public $ipControlName;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'description'   => 'Description',
        'ipControlId'   => 'IpControlId',
        'ipControlName' => 'IpControlName',
        'securityToken' => 'SecurityToken',
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
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->ipControlName) {
            $res['IpControlName'] = $this->ipControlName;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIpControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['IpControlName'])) {
            $model->ipControlName = $map['IpControlName'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

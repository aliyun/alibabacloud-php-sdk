<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyIpControlRequest extends Model
{
    /**
     * @description *   This operation is intended for API providers.
     *   This operation allows you to modify only the name and description of an ACL. You cannot modify the type of the ACL.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The description. The description can be up to 200 characters in length.
     *
     * @example 7ea91319a34d48a09b5c9c871d9768b1
     *
     * @var string
     */
    public $ipControlId;

    /**
     * @description The ID of the request.
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

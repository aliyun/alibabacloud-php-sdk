<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesResponseBody;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The action that WAF performs on requests that match the managed rule.
     *
     * @example deny
     *
     * @var string
     */
    public $action;

    /**
     * @description The ID of the managed rule.
     *
     * @example 100001
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the managed rule.
     *
     * @var string
     */
    public $name;

    /**
     * @description The protection level of the managed rule.
     *
     * @example 1
     *
     * @var int
     */
    public $protectionLevel;

    /**
     * @description The status of the protection rule.
     *
     * @example on
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'action' => 'Action',
        'id' => 'Id',
        'name' => 'Name',
        'protectionLevel' => 'ProtectionLevel',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

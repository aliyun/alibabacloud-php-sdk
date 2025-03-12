<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class CreateLayer7RuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example ddoscoo-cn-XXXXX
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @example test
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $rsType;

    /**
     * @description This parameter is required.
     *
     * @example [{"ProxyRules":[{"ProxyPort":443,"RealServers":["1.1.1.1:443"]}],"ProxyType":"https"},{"ProxyRules":[{"ProxyPort":80,"RealServers":["1.1.1.1:80"]}],"ProxyType":"http"}]
     *
     * @var string
     */
    public $rules;
    protected $_name = [
        'domain'          => 'Domain',
        'instanceIds'     => 'InstanceIds',
        'resourceGroupId' => 'ResourceGroupId',
        'rsType'          => 'RsType',
        'rules'           => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLayer7RuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        return $model;
    }
}

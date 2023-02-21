<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListAuthorizationRulesResponseBody;

use AlibabaCloud\Tea\Model;

class authorizationRules extends Model
{
    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example ar5g-xxxx
     *
     * @var string
     */
    public $authorizationRuleId;

    /**
     * @example 2022-3-15 22:20:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example ar5g-test
     *
     * @var string
     */
    public $description;

    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $destination;

    /**
     * @example 0-65535
     *
     * @var string
     */
    public $destinationPort;

    /**
     * @example Cidr
     *
     * @var string
     */
    public $destinationType;

    /**
     * @example true
     *
     * @var bool
     */
    public $dns;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example Permit
     *
     * @var string
     */
    public $policy;

    /**
     * @example all
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $sourceCidr;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @example Default
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'authorizationRuleId' => 'AuthorizationRuleId',
        'createTime'          => 'CreateTime',
        'description'         => 'Description',
        'destination'         => 'Destination',
        'destinationPort'     => 'DestinationPort',
        'destinationType'     => 'DestinationType',
        'dns'                 => 'Dns',
        'name'                => 'Name',
        'policy'              => 'Policy',
        'protocol'            => 'Protocol',
        'sourceCidr'          => 'SourceCidr',
        'status'              => 'Status',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->dns) {
            $res['Dns'] = $this->dns;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizationRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['Dns'])) {
            $model->dns = $map['Dns'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

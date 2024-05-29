<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddMockRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 178432728867xxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The ID of the consumer application.
     *
     * @example hkhon1po62@a000601b265xxxx
     *
     * @var string
     */
    public $consumerAppId;

    /**
     * @description The name of the consumer application.
     *
     * @example demo-xxxx
     *
     * @var string
     */
    public $consumerAppName;

    /**
     * @description Indicates whether the mock rule is enabled.
     *
     *   `true`: enabled
     *   `false`: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The description.
     *
     * @example desc
     *
     * @var string
     */
    public $extraJson;

    /**
     * @description The ID of the rule.
     *
     * @example 275
     *
     * @var int
     */
    public $id;

    /**
     * @description The mock type. Valid values:
     *
     *   \\- `[unk]0[unk]`: desktop client
     *   \\- `[unk]1[unk]`: mobile client
     *
     * @example 0
     *
     * @var int
     */
    public $mockType;

    /**
     * @description The name.
     *
     * @example mse-bc1a29b0-160230875****-reg-center-0-1
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The ID of the service provider application.
     *
     * @example hkhon1po62@a000601b265xxxx
     *
     * @var string
     */
    public $providerAppId;

    /**
     * @description The name of the service provider application.
     *
     * @example demo-xxxx
     *
     * @var string
     */
    public $providerAppName;

    /**
     * @description The region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The HTTP mock rule.
     *
     * @example [{"oper":"return+json","Path":"/mock","Value":"{\\n \\"date\\": \\"2021-09-10T07:45:12.357+0000\\",\\n \\"name\\": \\"name\\",\\n \\"id\\": \\"1\\"\\n}","Method":"GET","Condition":"AND","Timeout":1,"ArgumentMockItems":[{"type":"param","name":"id","value":"1","cond":"==","operator":"rawvalue"},{"type":"param","name":"name","value":"aliyun","cond":"==","operator":"rawvalue"}]}]
     *
     * @var string
     */
    public $scMockItemJson;

    /**
     * @description The service source.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'accountId'       => 'AccountId',
        'consumerAppId'   => 'ConsumerAppId',
        'consumerAppName' => 'ConsumerAppName',
        'enable'          => 'Enable',
        'extraJson'       => 'ExtraJson',
        'id'              => 'Id',
        'mockType'        => 'MockType',
        'name'            => 'Name',
        'namespaceId'     => 'NamespaceId',
        'providerAppId'   => 'ProviderAppId',
        'providerAppName' => 'ProviderAppName',
        'region'          => 'Region',
        'scMockItemJson'  => 'ScMockItemJson',
        'source'          => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->consumerAppId) {
            $res['ConsumerAppId'] = $this->consumerAppId;
        }
        if (null !== $this->consumerAppName) {
            $res['ConsumerAppName'] = $this->consumerAppName;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->extraJson) {
            $res['ExtraJson'] = $this->extraJson;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mockType) {
            $res['MockType'] = $this->mockType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->providerAppId) {
            $res['ProviderAppId'] = $this->providerAppId;
        }
        if (null !== $this->providerAppName) {
            $res['ProviderAppName'] = $this->providerAppName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->scMockItemJson) {
            $res['ScMockItemJson'] = $this->scMockItemJson;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ConsumerAppId'])) {
            $model->consumerAppId = $map['ConsumerAppId'];
        }
        if (isset($map['ConsumerAppName'])) {
            $model->consumerAppName = $map['ConsumerAppName'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['ExtraJson'])) {
            $model->extraJson = $map['ExtraJson'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MockType'])) {
            $model->mockType = $map['MockType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['ProviderAppId'])) {
            $model->providerAppId = $map['ProviderAppId'];
        }
        if (isset($map['ProviderAppName'])) {
            $model->providerAppName = $map['ProviderAppName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ScMockItemJson'])) {
            $model->scMockItemJson = $map['ScMockItemJson'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}

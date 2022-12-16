<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddMockRuleRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     * - en: English
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the custom application.
     *
     * @example [{\"appName\":\"provide\",\"appId\":\"bst8l6o735@f6d8aaf6e56e67d\"}]
     *
     * @var string
     */
    public $consumerAppIds;

    /**
     * @description The items in the recycle bin.
     *
     * @example []
     *
     * @var string
     */
    public $dubboMockItems;

    /**
     * @description Specifies whether to enable the rule. Valid values:
     *
     * - `false`: disables the rule.
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The description.
     *
     * @example {}
     *
     * @var string
     */
    public $extraJson;

    /**
     * @description The response time threshold of slow calls. Valid values:
     *
     * - 120: 120 ms
     * @example 1
     *
     * @var int
     */
    public $mockType;

    /**
     * @description The name of the rule.
     *
     * @example agent-auto-test-sc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the service provider application.
     *
     * @example dcqtkuhnc4@66e5235415****
     *
     * @var string
     */
    public $providerAppId;

    /**
     * @description The name of the service provider application.
     *
     * @example demo-cartservice
     *
     * @var string
     */
    public $providerAppName;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The input parameters. The JSON format is supported.
     *
     * @example []
     *
     * @var string
     */
    public $scMockItems;

    /**
     * @description The source of the rule. Valid values: -custom_fc: The rule is based on a custom function. -system_custom: The rule is based on a system function.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'consumerAppIds'  => 'ConsumerAppIds',
        'dubboMockItems'  => 'DubboMockItems',
        'enable'          => 'Enable',
        'extraJson'       => 'ExtraJson',
        'mockType'        => 'MockType',
        'name'            => 'Name',
        'providerAppId'   => 'ProviderAppId',
        'providerAppName' => 'ProviderAppName',
        'region'          => 'Region',
        'scMockItems'     => 'ScMockItems',
        'source'          => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->consumerAppIds) {
            $res['ConsumerAppIds'] = $this->consumerAppIds;
        }
        if (null !== $this->dubboMockItems) {
            $res['DubboMockItems'] = $this->dubboMockItems;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->extraJson) {
            $res['ExtraJson'] = $this->extraJson;
        }
        if (null !== $this->mockType) {
            $res['MockType'] = $this->mockType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->scMockItems) {
            $res['ScMockItems'] = $this->scMockItems;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMockRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ConsumerAppIds'])) {
            $model->consumerAppIds = $map['ConsumerAppIds'];
        }
        if (isset($map['DubboMockItems'])) {
            $model->dubboMockItems = $map['DubboMockItems'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['ExtraJson'])) {
            $model->extraJson = $map['ExtraJson'];
        }
        if (isset($map['MockType'])) {
            $model->mockType = $map['MockType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['ScMockItems'])) {
            $model->scMockItems = $map['ScMockItems'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}

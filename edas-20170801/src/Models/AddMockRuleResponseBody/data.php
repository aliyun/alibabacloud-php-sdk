<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AddMockRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $scMockItemJson;

    /**
     * @var string
     */
    public $consumerAppName;

    /**
     * @var string
     */
    public $consumerAppId;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $extraJson;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $providerAppId;

    /**
     * @var string
     */
    public $providerAppName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'namespaceId'     => 'NamespaceId',
        'scMockItemJson'  => 'ScMockItemJson',
        'consumerAppName' => 'ConsumerAppName',
        'consumerAppId'   => 'ConsumerAppId',
        'accountId'       => 'AccountId',
        'extraJson'       => 'ExtraJson',
        'source'          => 'Source',
        'region'          => 'Region',
        'providerAppId'   => 'ProviderAppId',
        'providerAppName' => 'ProviderAppName',
        'name'            => 'Name',
        'id'              => 'Id',
        'enable'          => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->scMockItemJson) {
            $res['ScMockItemJson'] = $this->scMockItemJson;
        }
        if (null !== $this->consumerAppName) {
            $res['ConsumerAppName'] = $this->consumerAppName;
        }
        if (null !== $this->consumerAppId) {
            $res['ConsumerAppId'] = $this->consumerAppId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->extraJson) {
            $res['ExtraJson'] = $this->extraJson;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->providerAppId) {
            $res['ProviderAppId'] = $this->providerAppId;
        }
        if (null !== $this->providerAppName) {
            $res['ProviderAppName'] = $this->providerAppName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['ScMockItemJson'])) {
            $model->scMockItemJson = $map['ScMockItemJson'];
        }
        if (isset($map['ConsumerAppName'])) {
            $model->consumerAppName = $map['ConsumerAppName'];
        }
        if (isset($map['ConsumerAppId'])) {
            $model->consumerAppId = $map['ConsumerAppId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ExtraJson'])) {
            $model->extraJson = $map['ExtraJson'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ProviderAppId'])) {
            $model->providerAppId = $map['ProviderAppId'];
        }
        if (isset($map['ProviderAppName'])) {
            $model->providerAppName = $map['ProviderAppName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class AddMockRuleRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $source;

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
    public $extraJson;

    /**
     * @var string
     */
    public $scMockItemJson;

    /**
     * @var string
     */
    public $dubboMockItemJson;

    /**
     * @var string
     */
    public $consumerAppsJson;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'name'              => 'Name',
        'region'            => 'Region',
        'source'            => 'Source',
        'providerAppId'     => 'ProviderAppId',
        'providerAppName'   => 'ProviderAppName',
        'extraJson'         => 'ExtraJson',
        'scMockItemJson'    => 'ScMockItemJson',
        'dubboMockItemJson' => 'DubboMockItemJson',
        'consumerAppsJson'  => 'ConsumerAppsJson',
        'enable'            => 'Enable',
        'namespace'         => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->providerAppId) {
            $res['ProviderAppId'] = $this->providerAppId;
        }
        if (null !== $this->providerAppName) {
            $res['ProviderAppName'] = $this->providerAppName;
        }
        if (null !== $this->extraJson) {
            $res['ExtraJson'] = $this->extraJson;
        }
        if (null !== $this->scMockItemJson) {
            $res['ScMockItemJson'] = $this->scMockItemJson;
        }
        if (null !== $this->dubboMockItemJson) {
            $res['DubboMockItemJson'] = $this->dubboMockItemJson;
        }
        if (null !== $this->consumerAppsJson) {
            $res['ConsumerAppsJson'] = $this->consumerAppsJson;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['ProviderAppId'])) {
            $model->providerAppId = $map['ProviderAppId'];
        }
        if (isset($map['ProviderAppName'])) {
            $model->providerAppName = $map['ProviderAppName'];
        }
        if (isset($map['ExtraJson'])) {
            $model->extraJson = $map['ExtraJson'];
        }
        if (isset($map['ScMockItemJson'])) {
            $model->scMockItemJson = $map['ScMockItemJson'];
        }
        if (isset($map['DubboMockItemJson'])) {
            $model->dubboMockItemJson = $map['DubboMockItemJson'];
        }
        if (isset($map['ConsumerAppsJson'])) {
            $model->consumerAppsJson = $map['ConsumerAppsJson'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}

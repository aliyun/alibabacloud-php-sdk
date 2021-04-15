<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

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
    public $scMockItems;

    /**
     * @var string
     */
    public $dubboMockItems;

    /**
     * @var string
     */
    public $consumerAppIds;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'name'            => 'Name',
        'region'          => 'Region',
        'source'          => 'Source',
        'providerAppId'   => 'ProviderAppId',
        'providerAppName' => 'ProviderAppName',
        'extraJson'       => 'ExtraJson',
        'scMockItems'     => 'ScMockItems',
        'dubboMockItems'  => 'DubboMockItems',
        'consumerAppIds'  => 'ConsumerAppIds',
        'enable'          => 'Enable',
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
        if (null !== $this->scMockItems) {
            $res['ScMockItems'] = $this->scMockItems;
        }
        if (null !== $this->dubboMockItems) {
            $res['DubboMockItems'] = $this->dubboMockItems;
        }
        if (null !== $this->consumerAppIds) {
            $res['ConsumerAppIds'] = $this->consumerAppIds;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (isset($map['ScMockItems'])) {
            $model->scMockItems = $map['ScMockItems'];
        }
        if (isset($map['DubboMockItems'])) {
            $model->dubboMockItems = $map['DubboMockItems'];
        }
        if (isset($map['ConsumerAppIds'])) {
            $model->consumerAppIds = $map['ConsumerAppIds'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}

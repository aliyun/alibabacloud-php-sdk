<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByIdResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByIdResponseBody\data\dubboMockItems;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetMockRuleByIdResponseBody\data\scMockItems;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dubboMockItems[]
     */
    public $dubboMockItems;

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
     * @var scMockItems[]
     */
    public $scMockItems;

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
        'dubboMockItems'  => 'DubboMockItems',
        'consumerAppName' => 'ConsumerAppName',
        'consumerAppId'   => 'ConsumerAppId',
        'accountId'       => 'AccountId',
        'extraJson'       => 'ExtraJson',
        'source'          => 'Source',
        'region'          => 'Region',
        'scMockItems'     => 'ScMockItems',
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
        if (null !== $this->dubboMockItems) {
            $res['DubboMockItems'] = [];
            if (null !== $this->dubboMockItems && \is_array($this->dubboMockItems)) {
                $n = 0;
                foreach ($this->dubboMockItems as $item) {
                    $res['DubboMockItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->scMockItems) {
            $res['ScMockItems'] = [];
            if (null !== $this->scMockItems && \is_array($this->scMockItems)) {
                $n = 0;
                foreach ($this->scMockItems as $item) {
                    $res['ScMockItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DubboMockItems'])) {
            if (!empty($map['DubboMockItems'])) {
                $model->dubboMockItems = [];
                $n                     = 0;
                foreach ($map['DubboMockItems'] as $item) {
                    $model->dubboMockItems[$n++] = null !== $item ? dubboMockItems::fromMap($item) : $item;
                }
            }
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
        if (isset($map['ScMockItems'])) {
            if (!empty($map['ScMockItems'])) {
                $model->scMockItems = [];
                $n                  = 0;
                foreach ($map['ScMockItems'] as $item) {
                    $model->scMockItems[$n++] = null !== $item ? scMockItems::fromMap($item) : $item;
                }
            }
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

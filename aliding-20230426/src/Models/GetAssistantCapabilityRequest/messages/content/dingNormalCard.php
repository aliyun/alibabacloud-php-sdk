<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\dingNormalCard\cardData;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\dingNormalCard\cardUpdateOptions;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\dingNormalCard\dynamicDataSourceConfigs;
use AlibabaCloud\Tea\Model;

class dingNormalCard extends Model
{
    /**
     * @example {}
     *
     * @var cardData
     */
    public $cardData;

    /**
     * @example templateId1
     *
     * @var string
     */
    public $cardTemplateId;

    /**
     * @example {}
     *
     * @var cardUpdateOptions
     */
    public $cardUpdateOptions;

    /**
     * @example {}
     *
     * @var dynamicDataSourceConfigs[]
     */
    public $dynamicDataSourceConfigs;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $privateData;
    protected $_name = [
        'cardData' => 'cardData',
        'cardTemplateId' => 'cardTemplateId',
        'cardUpdateOptions' => 'cardUpdateOptions',
        'dynamicDataSourceConfigs' => 'dynamicDataSourceConfigs',
        'privateData' => 'privateData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardData) {
            $res['cardData'] = null !== $this->cardData ? $this->cardData->toMap() : null;
        }
        if (null !== $this->cardTemplateId) {
            $res['cardTemplateId'] = $this->cardTemplateId;
        }
        if (null !== $this->cardUpdateOptions) {
            $res['cardUpdateOptions'] = null !== $this->cardUpdateOptions ? $this->cardUpdateOptions->toMap() : null;
        }
        if (null !== $this->dynamicDataSourceConfigs) {
            $res['dynamicDataSourceConfigs'] = [];
            if (null !== $this->dynamicDataSourceConfigs && \is_array($this->dynamicDataSourceConfigs)) {
                $n = 0;
                foreach ($this->dynamicDataSourceConfigs as $item) {
                    $res['dynamicDataSourceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privateData) {
            $res['privateData'] = $this->privateData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingNormalCard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cardData'])) {
            $model->cardData = cardData::fromMap($map['cardData']);
        }
        if (isset($map['cardTemplateId'])) {
            $model->cardTemplateId = $map['cardTemplateId'];
        }
        if (isset($map['cardUpdateOptions'])) {
            $model->cardUpdateOptions = cardUpdateOptions::fromMap($map['cardUpdateOptions']);
        }
        if (isset($map['dynamicDataSourceConfigs'])) {
            if (!empty($map['dynamicDataSourceConfigs'])) {
                $model->dynamicDataSourceConfigs = [];
                $n = 0;
                foreach ($map['dynamicDataSourceConfigs'] as $item) {
                    $model->dynamicDataSourceConfigs[$n++] = null !== $item ? dynamicDataSourceConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['privateData'])) {
            $model->privateData = $map['privateData'];
        }

        return $model;
    }
}

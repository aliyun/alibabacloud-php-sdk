<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\content\dingNormalCard\cardData;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\content\dingNormalCard\cardUpdateOptions;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\content\dingNormalCard\dynamicDataSourceConfigs;

class dingNormalCard extends Model
{
    /**
     * @var cardData
     */
    public $cardData;

    /**
     * @var string
     */
    public $cardTemplateId;

    /**
     * @var cardUpdateOptions
     */
    public $cardUpdateOptions;

    /**
     * @var dynamicDataSourceConfigs[]
     */
    public $dynamicDataSourceConfigs;

    /**
     * @var mixed[][]
     */
    public $privateData;
    protected $_name = [
        'cardData' => 'cardData',
        'cardTemplateId' => 'cardTemplateId',
        'cardUpdateOptions' => 'cardUpdateOptions',
        'dynamicDataSourceConfigs' => 'dynamicDataSourceConfigs',
        'privateData' => 'privateData',
    ];

    public function validate()
    {
        if (null !== $this->cardData) {
            $this->cardData->validate();
        }
        if (null !== $this->cardUpdateOptions) {
            $this->cardUpdateOptions->validate();
        }
        if (\is_array($this->dynamicDataSourceConfigs)) {
            Model::validateArray($this->dynamicDataSourceConfigs);
        }
        if (\is_array($this->privateData)) {
            Model::validateArray($this->privateData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardData) {
            $res['cardData'] = null !== $this->cardData ? $this->cardData->toArray($noStream) : $this->cardData;
        }

        if (null !== $this->cardTemplateId) {
            $res['cardTemplateId'] = $this->cardTemplateId;
        }

        if (null !== $this->cardUpdateOptions) {
            $res['cardUpdateOptions'] = null !== $this->cardUpdateOptions ? $this->cardUpdateOptions->toArray($noStream) : $this->cardUpdateOptions;
        }

        if (null !== $this->dynamicDataSourceConfigs) {
            if (\is_array($this->dynamicDataSourceConfigs)) {
                $res['dynamicDataSourceConfigs'] = [];
                $n1 = 0;
                foreach ($this->dynamicDataSourceConfigs as $item1) {
                    $res['dynamicDataSourceConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->privateData) {
            if (\is_array($this->privateData)) {
                $res['privateData'] = [];
                foreach ($this->privateData as $key1 => $value1) {
                    $res['privateData'][$key1] = $value1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['dynamicDataSourceConfigs'] as $item1) {
                    $model->dynamicDataSourceConfigs[$n1] = dynamicDataSourceConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['privateData'])) {
            if (!empty($map['privateData'])) {
                $model->privateData = [];
                foreach ($map['privateData'] as $key1 => $value1) {
                    $model->privateData[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

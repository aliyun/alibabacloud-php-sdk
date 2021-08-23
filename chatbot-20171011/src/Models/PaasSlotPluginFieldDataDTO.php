<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasSlotPluginFieldDataDTO extends Model
{
    /**
     * @description IntentName
     *
     * @var string
     */
    public $intentName;

    /**
     * @description IntentId
     *
     * @var string
     */
    public $intentId;

    /**
     * @description Name
     *
     * @var string
     */
    public $name;

    /**
     * @description IsSysIntent
     *
     * @var bool
     */
    public $isSysIntent;

    /**
     * @description ContentSlot
     *
     * @var PaasSlotConfigDTO[]
     */
    public $contentSlot;
    protected $_name = [
        'intentName'  => 'IntentName',
        'intentId'    => 'IntentId',
        'name'        => 'Name',
        'isSysIntent' => 'IsSysIntent',
        'contentSlot' => 'ContentSlot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->isSysIntent) {
            $res['IsSysIntent'] = $this->isSysIntent;
        }
        if (null !== $this->contentSlot) {
            $res['ContentSlot'] = [];
            if (null !== $this->contentSlot && \is_array($this->contentSlot)) {
                $n = 0;
                foreach ($this->contentSlot as $item) {
                    $res['ContentSlot'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasSlotPluginFieldDataDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IsSysIntent'])) {
            $model->isSysIntent = $map['IsSysIntent'];
        }
        if (isset($map['ContentSlot'])) {
            if (!empty($map['ContentSlot'])) {
                $model->contentSlot = [];
                $n                  = 0;
                foreach ($map['ContentSlot'] as $item) {
                    $model->contentSlot[$n++] = null !== $item ? PaasSlotConfigDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

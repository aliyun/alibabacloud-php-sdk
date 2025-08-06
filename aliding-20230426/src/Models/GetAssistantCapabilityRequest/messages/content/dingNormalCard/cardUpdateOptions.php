<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\dingNormalCard;

use AlibabaCloud\Dara\Model;

class cardUpdateOptions extends Model
{
    /**
     * @var bool
     */
    public $updateCardDataByKey;

    /**
     * @var bool
     */
    public $updatePrivateDataByKey;
    protected $_name = [
        'updateCardDataByKey' => 'updateCardDataByKey',
        'updatePrivateDataByKey' => 'updatePrivateDataByKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->updateCardDataByKey) {
            $res['updateCardDataByKey'] = $this->updateCardDataByKey;
        }

        if (null !== $this->updatePrivateDataByKey) {
            $res['updatePrivateDataByKey'] = $this->updatePrivateDataByKey;
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
        if (isset($map['updateCardDataByKey'])) {
            $model->updateCardDataByKey = $map['updateCardDataByKey'];
        }

        if (isset($map['updatePrivateDataByKey'])) {
            $model->updatePrivateDataByKey = $map['updatePrivateDataByKey'];
        }

        return $model;
    }
}

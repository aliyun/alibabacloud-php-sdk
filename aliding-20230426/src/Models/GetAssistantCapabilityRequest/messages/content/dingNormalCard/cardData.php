<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\dingNormalCard;

use AlibabaCloud\Dara\Model;

class cardData extends Model
{
    /**
     * @var mixed
     */
    public $cardParamMap;
    protected $_name = [
        'cardParamMap' => 'cardParamMap',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardParamMap) {
            $res['cardParamMap'] = $this->cardParamMap;
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
        if (isset($map['cardParamMap'])) {
            $model->cardParamMap = $map['cardParamMap'];
        }

        return $model;
    }
}

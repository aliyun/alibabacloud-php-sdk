<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageResponseBody\messages\content\dingNormalCard;

use AlibabaCloud\Dara\Model;

class cardData extends Model
{
    /**
     * @var mixed[]
     */
    public $cardParamMap;
    protected $_name = [
        'cardParamMap' => 'cardParamMap',
    ];

    public function validate()
    {
        if (\is_array($this->cardParamMap)) {
            Model::validateArray($this->cardParamMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardParamMap) {
            if (\is_array($this->cardParamMap)) {
                $res['cardParamMap'] = [];
                foreach ($this->cardParamMap as $key1 => $value1) {
                    $res['cardParamMap'][$key1] = $value1;
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
        if (isset($map['cardParamMap'])) {
            if (!empty($map['cardParamMap'])) {
                $model->cardParamMap = [];
                foreach ($map['cardParamMap'] as $key1 => $value1) {
                    $model->cardParamMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\SendAgentConversationMessageRequest;

use AlibabaCloud\Dara\Model;

class images extends Model
{
    /**
     * @var string
     */
    public $dataBase64;

    /**
     * @var string
     */
    public $mediaType;
    protected $_name = [
        'dataBase64' => 'dataBase64',
        'mediaType' => 'mediaType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataBase64) {
            $res['dataBase64'] = $this->dataBase64;
        }

        if (null !== $this->mediaType) {
            $res['mediaType'] = $this->mediaType;
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
        if (isset($map['dataBase64'])) {
            $model->dataBase64 = $map['dataBase64'];
        }

        if (isset($map['mediaType'])) {
            $model->mediaType = $map['mediaType'];
        }

        return $model;
    }
}

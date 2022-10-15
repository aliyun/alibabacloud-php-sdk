<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageRequest;

use AlibabaCloud\Tea\Model;

class textRequest extends Model
{
    /**
     * @var string
     */
    public $commandType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $speechText;

    /**
     * @var bool
     */
    public $interrupt;
    protected $_name = [
        'commandType' => 'CommandType',
        'id'          => 'Id',
        'speechText'  => 'SpeechText',
        'interrupt'   => 'interrupt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->speechText) {
            $res['SpeechText'] = $this->speechText;
        }
        if (null !== $this->interrupt) {
            $res['interrupt'] = $this->interrupt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SpeechText'])) {
            $model->speechText = $map['SpeechText'];
        }
        if (isset($map['interrupt'])) {
            $model->interrupt = $map['interrupt'];
        }

        return $model;
    }
}

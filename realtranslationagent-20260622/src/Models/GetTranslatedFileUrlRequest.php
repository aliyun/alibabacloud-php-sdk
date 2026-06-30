<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models;

use AlibabaCloud\Dara\Model;

class GetTranslatedFileUrlRequest extends Model
{
    /**
     * @var string
     */
    public $APIKey;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'APIKey' => 'APIKey',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->APIKey) {
            $res['APIKey'] = $this->APIKey;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['APIKey'])) {
            $model->APIKey = $map['APIKey'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordTemplateResponseBody\recordTemplate;

class GetLiveRecordTemplateResponseBody extends Model
{
    /**
     * @var recordTemplate
     */
    public $recordTemplate;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordTemplate' => 'RecordTemplate',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recordTemplate) {
            $this->recordTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordTemplate) {
            $res['RecordTemplate'] = null !== $this->recordTemplate ? $this->recordTemplate->toArray($noStream) : $this->recordTemplate;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RecordTemplate'])) {
            $model->recordTemplate = recordTemplate::fromMap($map['RecordTemplate']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

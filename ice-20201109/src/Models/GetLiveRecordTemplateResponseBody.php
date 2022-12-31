<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordTemplateResponseBody\recordTemplate;
use AlibabaCloud\Tea\Model;

class GetLiveRecordTemplateResponseBody extends Model
{
    /**
     * @description 录制模板
     *
     * @var recordTemplate
     */
    public $recordTemplate;

    /**
     * @example C892855F-95DF-50D6-A28C-279ABDB76810
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordTemplate' => 'RecordTemplate',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordTemplate) {
            $res['RecordTemplate'] = null !== $this->recordTemplate ? $this->recordTemplate->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveRecordTemplateResponseBody
     */
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

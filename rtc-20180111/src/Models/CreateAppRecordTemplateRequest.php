<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppRecordTemplateRequest\recordTemplate;
use AlibabaCloud\Tea\Model;

class CreateAppRecordTemplateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ac7N****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @var recordTemplate
     */
    public $recordTemplate;
    protected $_name = [
        'appId' => 'AppId',
        'clientToken' => 'ClientToken',
        'recordTemplate' => 'RecordTemplate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->recordTemplate) {
            $res['RecordTemplate'] = null !== $this->recordTemplate ? $this->recordTemplate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRecordTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RecordTemplate'])) {
            $model->recordTemplate = recordTemplate::fromMap($map['RecordTemplate']);
        }

        return $model;
    }
}

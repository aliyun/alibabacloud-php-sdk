<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateAppRecordTemplateShrinkRequest extends Model
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
     * @var string
     */
    public $recordTemplateShrink;
    protected $_name = [
        'appId'                => 'AppId',
        'clientToken'          => 'ClientToken',
        'recordTemplateShrink' => 'RecordTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->recordTemplateShrink) {
            $res['RecordTemplate'] = $this->recordTemplateShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRecordTemplateShrinkRequest
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
            $model->recordTemplateShrink = $map['RecordTemplate'];
        }

        return $model;
    }
}

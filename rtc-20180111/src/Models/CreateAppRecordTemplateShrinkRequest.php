<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class CreateAppRecordTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $clientToken;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

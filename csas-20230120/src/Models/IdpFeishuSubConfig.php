<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class IdpFeishuSubConfig extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $eventAesKey;

    /**
     * @var string
     */
    public $eventLabel;

    /**
     * @var string
     */
    public $eventVerifyToken;

    /**
     * @var string
     */
    public $redirectUri;
    protected $_name = [
        'appId' => 'AppId',
        'appSecret' => 'AppSecret',
        'corpId' => 'CorpId',
        'eventAesKey' => 'EventAesKey',
        'eventLabel' => 'EventLabel',
        'eventVerifyToken' => 'EventVerifyToken',
        'redirectUri' => 'RedirectUri',
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

        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }

        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->eventAesKey) {
            $res['EventAesKey'] = $this->eventAesKey;
        }

        if (null !== $this->eventLabel) {
            $res['EventLabel'] = $this->eventLabel;
        }

        if (null !== $this->eventVerifyToken) {
            $res['EventVerifyToken'] = $this->eventVerifyToken;
        }

        if (null !== $this->redirectUri) {
            $res['RedirectUri'] = $this->redirectUri;
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

        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }

        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['EventAesKey'])) {
            $model->eventAesKey = $map['EventAesKey'];
        }

        if (isset($map['EventLabel'])) {
            $model->eventLabel = $map['EventLabel'];
        }

        if (isset($map['EventVerifyToken'])) {
            $model->eventVerifyToken = $map['EventVerifyToken'];
        }

        if (isset($map['RedirectUri'])) {
            $model->redirectUri = $map['RedirectUri'];
        }

        return $model;
    }
}

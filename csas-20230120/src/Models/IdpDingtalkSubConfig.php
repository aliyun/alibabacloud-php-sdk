<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class IdpDingtalkSubConfig extends Model
{
    /**
     * @var string
     */
    public $appKey;

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
     * @var bool
     */
    public $exclusive;

    /**
     * @var string
     */
    public $redirectUri;
    protected $_name = [
        'appKey' => 'AppKey',
        'appSecret' => 'AppSecret',
        'corpId' => 'CorpId',
        'eventAesKey' => 'EventAesKey',
        'eventLabel' => 'EventLabel',
        'eventVerifyToken' => 'EventVerifyToken',
        'exclusive' => 'Exclusive',
        'redirectUri' => 'RedirectUri',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
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
        if (null !== $this->exclusive) {
            $res['Exclusive'] = $this->exclusive;
        }
        if (null !== $this->redirectUri) {
            $res['RedirectUri'] = $this->redirectUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IdpDingtalkSubConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
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
        if (isset($map['Exclusive'])) {
            $model->exclusive = $map['Exclusive'];
        }
        if (isset($map['RedirectUri'])) {
            $model->redirectUri = $map['RedirectUri'];
        }

        return $model;
    }
}

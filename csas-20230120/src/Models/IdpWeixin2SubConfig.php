<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class IdpWeixin2SubConfig extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $appSchema;

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
        'agentId' => 'AgentId',
        'appSchema' => 'AppSchema',
        'appSecret' => 'AppSecret',
        'corpId' => 'CorpId',
        'eventAesKey' => 'EventAesKey',
        'eventLabel' => 'EventLabel',
        'eventVerifyToken' => 'EventVerifyToken',
        'redirectUri' => 'RedirectUri',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->appSchema) {
            $res['AppSchema'] = $this->appSchema;
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

    /**
     * @param array $map
     *
     * @return IdpWeixin2SubConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AppSchema'])) {
            $model->appSchema = $map['AppSchema'];
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

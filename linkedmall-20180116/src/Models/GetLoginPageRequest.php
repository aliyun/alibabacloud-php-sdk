<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GetLoginPageRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var bool
     */
    public $useAnonymousTbAccount;

    /**
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @var string
     */
    public $targetUrl;

    /**
     * @var string
     */
    public $failUrl;
    protected $_name = [
        'bizId'                 => 'BizId',
        'useAnonymousTbAccount' => 'UseAnonymousTbAccount',
        'thirdPartyUserId'      => 'ThirdPartyUserId',
        'targetUrl'             => 'TargetUrl',
        'failUrl'               => 'FailUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->useAnonymousTbAccount) {
            $res['UseAnonymousTbAccount'] = $this->useAnonymousTbAccount;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->failUrl) {
            $res['FailUrl'] = $this->failUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoginPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['UseAnonymousTbAccount'])) {
            $model->useAnonymousTbAccount = $map['UseAnonymousTbAccount'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['FailUrl'])) {
            $model->failUrl = $map['FailUrl'];
        }

        return $model;
    }
}

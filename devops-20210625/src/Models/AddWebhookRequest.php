<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class AddWebhookRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @description webhook描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 使用ssl认证
     *
     * @var bool
     */
    public $enableSslVerification;

    /**
     * @description 合并请求事件
     *
     * @var bool
     */
    public $mergeRequestsEvents;

    /**
     * @description 评论事件
     *
     * @var bool
     */
    public $noteEvents;

    /**
     * @description 分支推送事件
     *
     * @var bool
     */
    public $pushEvents;

    /**
     * @var string
     */
    public $secretToken;

    /**
     * @description 标签推送事件
     *
     * @var bool
     */
    public $tagPushEvents;

    /**
     * @description hook url
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'accessToken'           => 'AccessToken',
        'organizationId'        => 'OrganizationId',
        'description'           => 'description',
        'enableSslVerification' => 'enableSslVerification',
        'mergeRequestsEvents'   => 'mergeRequestsEvents',
        'noteEvents'            => 'noteEvents',
        'pushEvents'            => 'pushEvents',
        'secretToken'           => 'secretToken',
        'tagPushEvents'         => 'tagPushEvents',
        'url'                   => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->enableSslVerification) {
            $res['enableSslVerification'] = $this->enableSslVerification;
        }
        if (null !== $this->mergeRequestsEvents) {
            $res['mergeRequestsEvents'] = $this->mergeRequestsEvents;
        }
        if (null !== $this->noteEvents) {
            $res['noteEvents'] = $this->noteEvents;
        }
        if (null !== $this->pushEvents) {
            $res['pushEvents'] = $this->pushEvents;
        }
        if (null !== $this->secretToken) {
            $res['secretToken'] = $this->secretToken;
        }
        if (null !== $this->tagPushEvents) {
            $res['tagPushEvents'] = $this->tagPushEvents;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddWebhookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['enableSslVerification'])) {
            $model->enableSslVerification = $map['enableSslVerification'];
        }
        if (isset($map['mergeRequestsEvents'])) {
            $model->mergeRequestsEvents = $map['mergeRequestsEvents'];
        }
        if (isset($map['noteEvents'])) {
            $model->noteEvents = $map['noteEvents'];
        }
        if (isset($map['pushEvents'])) {
            $model->pushEvents = $map['pushEvents'];
        }
        if (isset($map['secretToken'])) {
            $model->secretToken = $map['secretToken'];
        }
        if (isset($map['tagPushEvents'])) {
            $model->tagPushEvents = $map['tagPushEvents'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class AddWebhookRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $enableSslVerification;
    /**
     * @var bool
     */
    public $mergeRequestsEvents;
    /**
     * @var bool
     */
    public $noteEvents;
    /**
     * @var bool
     */
    public $pushEvents;
    /**
     * @var string
     */
    public $secretToken;
    /**
     * @var bool
     */
    public $tagPushEvents;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'           => 'accessToken',
        'description'           => 'description',
        'enableSslVerification' => 'enableSslVerification',
        'mergeRequestsEvents'   => 'mergeRequestsEvents',
        'noteEvents'            => 'noteEvents',
        'pushEvents'            => 'pushEvents',
        'secretToken'           => 'secretToken',
        'tagPushEvents'         => 'tagPushEvents',
        'url'                   => 'url',
        'organizationId'        => 'organizationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
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

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
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

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}

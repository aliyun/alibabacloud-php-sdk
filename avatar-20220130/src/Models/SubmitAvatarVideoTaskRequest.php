<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAvatarVideoTaskRequest\app;
use AlibabaCloud\Tea\Model;

class SubmitAvatarVideoTaskRequest extends Model
{
    /**
     * @var app
     */
    public $app;

    /**
     * @example false
     *
     * @var bool
     */
    public $callback;

    /**
     * @example {
     * }
     * @var string
     */
    public $callbackParams;

    /**
     * @example {
     * }
     * @var string
     */
    public $extParams;

    /**
     * @example xxx
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $videoParams;
    protected $_name = [
        'app'            => 'App',
        'callback'       => 'Callback',
        'callbackParams' => 'CallbackParams',
        'extParams'      => 'ExtParams',
        'tenantId'       => 'TenantId',
        'title'          => 'Title',
        'videoParams'    => 'VideoParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = null !== $this->app ? $this->app->toMap() : null;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->callbackParams) {
            $res['CallbackParams'] = $this->callbackParams;
        }
        if (null !== $this->extParams) {
            $res['ExtParams'] = $this->extParams;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->videoParams) {
            $res['VideoParams'] = $this->videoParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAvatarVideoTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['CallbackParams'])) {
            $model->callbackParams = $map['CallbackParams'];
        }
        if (isset($map['ExtParams'])) {
            $model->extParams = $map['ExtParams'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['VideoParams'])) {
            $model->videoParams = $map['VideoParams'];
        }

        return $model;
    }
}

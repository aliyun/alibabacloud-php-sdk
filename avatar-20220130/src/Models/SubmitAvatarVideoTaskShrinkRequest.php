<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class SubmitAvatarVideoTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appShrink;

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
        'appShrink'      => 'App',
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
        if (null !== $this->appShrink) {
            $res['App'] = $this->appShrink;
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
     * @return SubmitAvatarVideoTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->appShrink = $map['App'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceRequest\app;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceRequest\channel;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceRequest\commandRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceRequest\textRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceRequest\user;
use AlibabaCloud\Tea\Model;

class StartInstanceRequest extends Model
{
    /**
     * @var app
     */
    public $app;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var channel
     */
    public $channel;

    /**
     * @var commandRequest
     */
    public $commandRequest;

    /**
     * @example 9185
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var textRequest
     */
    public $textRequest;

    /**
     * @var user
     */
    public $user;
    protected $_name = [
        'app'            => 'App',
        'bizId'          => 'BizId',
        'channel'        => 'Channel',
        'commandRequest' => 'CommandRequest',
        'tenantId'       => 'TenantId',
        'textRequest'    => 'TextRequest',
        'user'           => 'User',
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
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = null !== $this->channel ? $this->channel->toMap() : null;
        }
        if (null !== $this->commandRequest) {
            $res['CommandRequest'] = null !== $this->commandRequest ? $this->commandRequest->toMap() : null;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->textRequest) {
            $res['TextRequest'] = null !== $this->textRequest ? $this->textRequest->toMap() : null;
        }
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = channel::fromMap($map['Channel']);
        }
        if (isset($map['CommandRequest'])) {
            $model->commandRequest = commandRequest::fromMap($map['CommandRequest']);
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TextRequest'])) {
            $model->textRequest = textRequest::fromMap($map['TextRequest']);
        }
        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }

        return $model;
    }
}

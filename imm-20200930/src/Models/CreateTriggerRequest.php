<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateTriggerRequest\actions;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateTriggerRequest\notification;
use AlibabaCloud\Tea\Model;

class CreateTriggerRequest extends Model
{
    /**
     * @description The processing templates.
     *
     * This parameter is required.
     * @var actions[]
     */
    public $actions;

    /**
     * @description The data source configurations.
     *
     * This parameter is required.
     * @var Input
     */
    public $input;

    /**
     * @description The notification settings. The operation supports multiple messaging middleware options. For more information about notification messages, see Asynchronous message examples. You can use one of the following methods to receive notification messages:
     *
     * Activate and connect to EventBridge in the same region as the IMM project. For more information, see IMM events. Activate Simple Message Queue in the same region as the IMM project and configure a subscription.
     * @var notification
     */
    public $notification;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The service role. IMM assumes the service role so that it can access resources in other cloud services, such as OSS. Default value: AliyunIMMBatchTriggerRole.
     *
     * This parameter is required.
     * @example AliyunIMMDefaultRole
     *
     * @var string
     */
    public $serviceRole;

    /**
     * @description The custom tags. You can search for or filter asynchronous tasks by custom tag.
     *
     * @example {"key":"val"}
     *
     * @var mixed[]
     */
    public $tags;
    protected $_name = [
        'actions'      => 'Actions',
        'input'        => 'Input',
        'notification' => 'Notification',
        'projectName'  => 'ProjectName',
        'serviceRole'  => 'ServiceRole',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['Actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->serviceRole) {
            $res['ServiceRole'] = $this->serviceRole;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n              = 0;
                foreach ($map['Actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? actions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Input'])) {
            $model->input = Input::fromMap($map['Input']);
        }
        if (isset($map['Notification'])) {
            $model->notification = notification::fromMap($map['Notification']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ServiceRole'])) {
            $model->serviceRole = $map['ServiceRole'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}

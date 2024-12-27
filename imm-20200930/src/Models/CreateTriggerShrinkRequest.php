<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateTriggerShrinkRequest extends Model
{
    /**
     * @description The processing templates.
     *
     * This parameter is required.
     * @var string
     */
    public $actionsShrink;

    /**
     * @description The data source configurations.
     *
     * This parameter is required.
     * @var string
     */
    public $inputShrink;

    /**
     * @description The notification settings. The operation supports multiple messaging middleware options. For more information about notification messages, see Asynchronous message examples. You can use one of the following methods to receive notification messages:
     *
     * Activate and connect to EventBridge in the same region as the IMM project. For more information, see IMM events. Activate Simple Message Queue in the same region as the IMM project and configure a subscription.
     * @var string
     */
    public $notificationShrink;

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
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'actionsShrink'      => 'Actions',
        'inputShrink'        => 'Input',
        'notificationShrink' => 'Notification',
        'projectName'        => 'ProjectName',
        'serviceRole'        => 'ServiceRole',
        'tagsShrink'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionsShrink) {
            $res['Actions'] = $this->actionsShrink;
        }
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->serviceRole) {
            $res['ServiceRole'] = $this->serviceRole;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTriggerShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            $model->actionsShrink = $map['Actions'];
        }
        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ServiceRole'])) {
            $model->serviceRole = $map['ServiceRole'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}

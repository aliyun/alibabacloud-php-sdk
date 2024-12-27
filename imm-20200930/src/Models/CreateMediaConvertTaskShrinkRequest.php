<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateMediaConvertTaskShrinkRequest extends Model
{
    /**
     * @description The sequence number of the main media file in the concatenation list of media files. The main media file provides the default transcoding settings, such as the resolution and the frame rate, for videos and audios. Default value: `0`. A value of `0` specifies that the main media file is aligned with the first media file in the concatenation list.
     *
     * @var int
     */
    public $alignmentIndex;

    /**
     * @description **If you have no special requirements, leave this parameter empty.**
     *
     * The authorization chain. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @description The notification settings. For more information, see "Notification". For information about the asynchronous notification format, see [Asynchronous notification format](https://help.aliyun.com/document_detail/2743997.html).
     *
     * @var string
     */
    public $notificationShrink;

    /**
     * @description The name of the project. You can obtain the name of the project from the response of the [CreateProject](https://help.aliyun.com/document_detail/478153.html) operation.
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The source media files. If multiple files exist at the same time, the Concat feature is enabled. The video files are concatenated in the order of their URI inputs.
     *
     * This parameter is required.
     * @var string
     */
    public $sourcesShrink;

    /**
     * @description The custom tags. You can search for or filter asynchronous tasks by custom tag.
     *
     * @example {"test":"val1"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The media processing tasks. You can specify multiple values for this parameter.
     *
     * This parameter is required.
     * @var string
     */
    public $targetsShrink;

    /**
     * @description The custom information, which is returned as asynchronous notifications to facilitate notification management in your system. The maximum information length is 2,048 bytes.
     *
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'alignmentIndex'         => 'AlignmentIndex',
        'credentialConfigShrink' => 'CredentialConfig',
        'notificationShrink'     => 'Notification',
        'projectName'            => 'ProjectName',
        'sourcesShrink'          => 'Sources',
        'tagsShrink'             => 'Tags',
        'targetsShrink'          => 'Targets',
        'userData'               => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alignmentIndex) {
            $res['AlignmentIndex'] = $this->alignmentIndex;
        }
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourcesShrink) {
            $res['Sources'] = $this->sourcesShrink;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->targetsShrink) {
            $res['Targets'] = $this->targetsShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMediaConvertTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlignmentIndex'])) {
            $model->alignmentIndex = $map['AlignmentIndex'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Sources'])) {
            $model->sourcesShrink = $map['Sources'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['Targets'])) {
            $model->targetsShrink = $map['Targets'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

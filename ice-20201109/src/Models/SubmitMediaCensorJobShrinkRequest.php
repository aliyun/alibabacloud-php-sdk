<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaCensorJobShrinkRequest extends Model
{
    /**
     * @description The live comments of the video.
     *
     * >  If this parameter is specified, the system checks the live comments specified by this parameter instead of the live comments of the input file specified by Media.
     * @example hello world
     *
     * @var string
     */
    public $barrages;

    /**
     * @description The Object Storage Service (OSS) objects that are used as the thumbnails. Specify the thumbnails in a JSON array. A maximum of five thumbnails are supported.
     *
     * >  If this parameter is specified, the system checks the thumbnails specified by this parameter instead of the thumbnails of the input file specified by **Media**.
     * @example [{"Bucket":"example-bucket-****","Location":"oss-cn-shanghai","Object":"example-****.jpeg","RoleArn":"acs:ram::1997018457688683:role/AliyunICEDefaultRole"}]
     *
     * @var string
     */
    public $coverImages;

    /**
     * @description The video description, which can be up to 128 bytes in length.
     *
     * >  If this parameter is specified, the system checks the description specified by this parameter instead of the description of the input file specified by Media.
     * @example example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The information about the file to be moderated.
     *
     * @var string
     */
    public $inputShrink;

    /**
     * @description The callback URL. Simple Message Queue (SMQ, formerly MNS) and HTTP callbacks are supported.
     *
     * @example mns://125340688170****.oss-cn-shanghai.aliyuncs.com/queues/example-pipeline
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description The output snapshots. The moderation job generates output snapshots and the result JSON file in the path corresponding to the input file.
     *
     *   File name format of output snapshots: oss://bucket/snapshot-{Count}.jpg. In the path, bucket indicates an OSS bucket that resides in the same region as the current project, and {Count} is the sequence number of the snapshot.
     *   The detailed moderation results are stored in the {jobId}.output file in the same OSS folder as the output snapshots. For more information about the parameters in the output file, see [Output parameters of media moderation jobs](https://help.aliyun.com/document_detail/609211.html).
     *
     * @example oss://sashimi-cn-shanghai/censor/snapshot-{Count}.jpg
     *
     * @var string
     */
    public $output;

    /**
     * @description The scheduling configurations.
     *
     * @var string
     */
    public $scheduleConfigShrink;

    /**
     * @description The template ID. If this parameter is not specified, the default template is used for moderation.
     *
     * @example S00000001-100060
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The video title, which can be up to 64 bytes in length.
     *
     * >  If this parameter is specified, the system checks the title specified by this parameter instead of the title of the input file specified by Media.
     * @example Hello World
     *
     * @var string
     */
    public $title;

    /**
     * @description The user-defined data, which can be up to 128 bytes in length.
     *
     * @example UserDatatestid-001-****
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'barrages'             => 'Barrages',
        'coverImages'          => 'CoverImages',
        'description'          => 'Description',
        'inputShrink'          => 'Input',
        'notifyUrl'            => 'NotifyUrl',
        'output'               => 'Output',
        'scheduleConfigShrink' => 'ScheduleConfig',
        'templateId'           => 'TemplateId',
        'title'                => 'Title',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->barrages) {
            $res['Barrages'] = $this->barrages;
        }
        if (null !== $this->coverImages) {
            $res['CoverImages'] = $this->coverImages;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->scheduleConfigShrink) {
            $res['ScheduleConfig'] = $this->scheduleConfigShrink;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitMediaCensorJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Barrages'])) {
            $model->barrages = $map['Barrages'];
        }
        if (isset($map['CoverImages'])) {
            $model->coverImages = $map['CoverImages'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfigShrink = $map['ScheduleConfig'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

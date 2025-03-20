<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ProduceEditingProjectVideoRequest extends Model
{
    /**
     * @description The ID of the application. Default value: **app-1000000**. For more information, see [Multi-application service](https://help.aliyun.com/document_detail/113600.html).
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The thumbnail URL of the online editing project.
     *
     * @example https://example.aliyundoc.com/6AB4D0E1E1C7446888351****.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The description of the online editing project.
     *
     * @example description test
     *
     * @var string
     */
    public $description;

    /**
     * @description The video metadata. The value must be in JSON format. For more information about the parameter structure, see [MediaMetadata](~~52839#title_rtf_ry5_gjp~~).
     *
     * @example {"Description":"video description","Title":"userData test"}
     *
     * @var string
     */
    public $mediaMetadata;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The configuration of video production. The value must be in the JSON format. For more information about the parameter structure, see [ProduceConfig](~~52839#title-ybl-7cs-y7d~~).
     *
     * >  StorageLocation is required if you produce videos in a region other than China (Shanghai).
     *
     * @example {"TemplateGroupId":"6d11e25ea30a4c465435c74****"}
     *
     * @var string
     */
    public $produceConfig;

    /**
     * @description The ID of the online editing project. You can use one of the following methods to obtain the ID of the online editing project:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Production Center** > **Video Editing** to view the ID of the online editing project.
     *   Obtain the value of ProjectId from the response to the [AddEditingProject](https://help.aliyun.com/document_detail/69048.html) operation.
     *
     * @example fb2101bf24b4cb318787dc****
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The timeline of the online editing project. The value must be in JSON format. For more information about the parameter structure, see [Timeline](~~52839#07bc7fe0f2xuh~~).
     *
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"cc3308ac59615a54328bc3443****"},{"MediaId":"da87a9cff645cd88bc6d8326e4****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @description The title of the online editing project.
     *
     * @example editing project test
     *
     * @var string
     */
    public $title;

    /**
     * @description The custom configurations, such as the callback configuration. The value must be a JSON string. For more information about the parameter structure, see [UserData](~~86952#title_vz7_xzs_0c5~~).
     *
     * > The callback configurations take effect only after you specify an HTTP URL for receiving callback notifications and select the event types in the ApsaraVideo VOD console.
     *
     * @example {"Extend":{"width":1280,"id":"028a8e56b1ebf6bb7afc74****","height":720},"MessageCallback":{"CallbackURL":"https://example.aliyundoc.com/2016-08-15/proxy/httpcallback/testcallback/","CallbackType":"http"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'appId' => 'AppId',
        'coverURL' => 'CoverURL',
        'description' => 'Description',
        'mediaMetadata' => 'MediaMetadata',
        'ownerId' => 'OwnerId',
        'produceConfig' => 'ProduceConfig',
        'projectId' => 'ProjectId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'timeline' => 'Timeline',
        'title' => 'Title',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->mediaMetadata) {
            $res['MediaMetadata'] = $this->mediaMetadata;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->produceConfig) {
            $res['ProduceConfig'] = $this->produceConfig;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
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
     * @return ProduceEditingProjectVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MediaMetadata'])) {
            $model->mediaMetadata = $map['MediaMetadata'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProduceConfig'])) {
            $model->produceConfig = $map['ProduceConfig'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ProduceEditingProjectVideoRequest extends Model
{
    /**
     * @description >ApsaraVideo VOD sends a FileUploadComplete event notification after video production is complete, which is similar to the action that is performed after video upload. After the produced video is transcoded, ApsaraVideo VOD sends the StreamTranscodeComplete and TranscodeComplete event notifications.
     *
     * @example https://example.aliyundoc.com/6AB4D0E1E1C7446888351****.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The description of the online editing project.
     *
     * @example The ID of the request.
     *
     * @var string
     */
    public $description;

    /**
     * @description Produces a video from one or more mezzanine files. You can directly submit mezzanine files by specifying the Timeline parameter. Alternatively, you can submit mezzanine files after you create an online editing project.
     *
     * @example 58928
     *
     * @var string
     */
    public $mediaMetadata;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description 朴灵
     *
     * @example {"TemplateGroupId":"6d11e25ea30a4c465435c74****"}
     *
     * @var string
     */
    public $produceConfig;

    /**
     * @description The thumbnail URL of the online editing project.
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
     * @description The ID of the produced video.
     *
     * > *   This operation returns the ID of the produced video in synchronous mode.
     * > *   If this operation returns the MediaId parameter, the video production task is being asynchronously processed.
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"cc3308ac59615a54328bc3443****"},{"MediaId":"da87a9cff645cd88bc6d8326e4****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @description The metadata of the produced video, in JSON format. For more information about the structure, see [MediaMetadata](~~52839~~).
     *
     * @example The ID of the online editing project.
     *
     * @var string
     */
    public $title;

    /**
     * @example {"Extend":{"width":1280,"id":"028a8e56b1ebf6bb7afc74****","height":720},"MessageCallback":{"CallbackURL":"https://example.aliyundoc.com/2016-08-15/proxy/httpcallback/testcallback/","CallbackType":"http"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'coverURL'             => 'CoverURL',
        'description'          => 'Description',
        'mediaMetadata'        => 'MediaMetadata',
        'ownerId'              => 'OwnerId',
        'produceConfig'        => 'ProduceConfig',
        'projectId'            => 'ProjectId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'timeline'             => 'Timeline',
        'title'                => 'Title',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddEditingProjectRequest extends Model
{
    /**
     * @description The thumbnail URL of the online editing project. If you do not specify this parameter and the video track in the timeline has mezzanine files, the thumbnail of the first mezzanine file in the timeline is used.
     *
     * @example https://demo.aliyundoc.com/6AB4D0E1E1C74468883516C2349D1FC2-6-2.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The description of the online editing project.
     *
     * @example testtimeline001desciption
     *
     * @var string
     */
    public $description;

    /**
     * @description The region where you want to create the online editing project.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $division;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @description The timeline of the online editing project, in JSON format. For more information about the structure, see [Timeline](~~52839~~).
     *
     * If you do not specify this parameter, an empty timeline is created and the duration of the online editing project is zero.
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"cc3308ac5006aed55a54328bc3443****"},{"MediaId":"95948ddba24446b6aed5db985e78****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @description The title of the online editing project.
     *
     * @example testtimeline
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'coverURL'             => 'CoverURL',
        'description'          => 'Description',
        'division'             => 'Division',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'timeline'             => 'Timeline',
        'title'                => 'Title',
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
        if (null !== $this->division) {
            $res['Division'] = $this->division;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEditingProjectRequest
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
        if (isset($map['Division'])) {
            $model->division = $map['Division'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        return $model;
    }
}

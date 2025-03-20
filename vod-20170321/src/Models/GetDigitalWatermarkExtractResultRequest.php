<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetDigitalWatermarkExtractResultRequest extends Model
{
    /**
     * @description The type of the watermark. Valid values:
     *
     *   **TraceMark**: user-tracing watermark
     *   **CopyrightMark**: copyright watermark
     *
     * This parameter is required.
     *
     * @example TraceMark
     *
     * @var string
     */
    public $extractType;

    /**
     * @description The ID of the watermark extraction job.
     *
     *   You can obtain the ID from the response to the [SubmitDigitalWatermarkExtractJob](~~SubmitDigitalWatermarkExtractJob~~) operation.
     *   If you specify this parameter, the result of the specified watermark extraction job is returned. If you leave this parameter empty, the results of all watermark extraction jobs submitted for the video are returned.
     *
     * @example 2bf4390af9e5491c09cc720ad****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the video from which you want to query the watermark content. You can specify only one ID. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Media Files** > **Audio/Video** to view the video ID.
     *   Obtain the VideoId from the response to the [SearchMedia](~~SearchMedia~~) operation.
     *
     * This parameter is required.
     *
     * @example 93ab850b4f6f54b6e91d24d81d4****
     *
     * @var string
     */
    public $mediaId;

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
    protected $_name = [
        'extractType' => 'ExtractType',
        'jobId' => 'JobId',
        'mediaId' => 'MediaId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->extractType) {
            $res['ExtractType'] = $this->extractType;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDigitalWatermarkExtractResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtractType'])) {
            $model->extractType = $map['ExtractType'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
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

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaStorageClassRequest extends Model
{
    /**
     * @description Specifies whether to change the storage class of a media asset that is stored for less than the minimum storage duration. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  If you forcibly change the storage class of a media asset that is stored for less than the minimum storage duration, additional data retrieval fees are incurred.
     * @example false
     *
     * @var bool
     */
    public $allowUpdateWithoutTimeLimit;

    /**
     * @description The media asset ID. You can specify a maximum of 20 IDs. Separate multiple IDs with commas (,). You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD](https://vod.console.aliyun.com) console. In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, you can view the ID of the media asset. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of the VideoId parameter from the response to the [CreateUploadVideo](https://help.aliyun.com/document_detail/55407.html) operation that you call to upload media assets.
     *   Obtain the value of the VideoId parameter from the response to the [SearchMedia](https://help.aliyun.com/document_detail/86044.html) operation that you call to query the media ID after the media asset is uploaded.
     *
     * This parameter is required.
     * @example d56c2ac0cee271ed80004710b5ba****
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @description The restoration priority. This parameter is required only when you restore a Cold Archive media asset. Valid values:
     *
     *   **Expedited**
     *   **Standard**
     *   **Bulk**
     *
     * @example Standard
     *
     * @var string
     */
    public $restoreTier;

    /**
     * @description The modification range. Valid values:
     *
     *   **All**: modifies the storage classes of all resources including the source files and transcoded streams.
     *   **SourceFile**: modifies the storage classes of only the source files. The storage class of other resources is Standard.
     *
     * @example All
     *
     * @var string
     */
    public $scope;

    /**
     * @description The storage class. Valid values:
     *
     *   **Standard**
     *   **IA**
     *   **Archive**
     *   **ColdArchive**
     *
     * This parameter is required.
     * @example Archive
     *
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'allowUpdateWithoutTimeLimit' => 'AllowUpdateWithoutTimeLimit',
        'mediaIds'                    => 'MediaIds',
        'restoreTier'                 => 'RestoreTier',
        'scope'                       => 'Scope',
        'storageClass'                => 'StorageClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowUpdateWithoutTimeLimit) {
            $res['AllowUpdateWithoutTimeLimit'] = $this->allowUpdateWithoutTimeLimit;
        }
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->restoreTier) {
            $res['RestoreTier'] = $this->restoreTier;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMediaStorageClassRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowUpdateWithoutTimeLimit'])) {
            $model->allowUpdateWithoutTimeLimit = $map['AllowUpdateWithoutTimeLimit'];
        }
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['RestoreTier'])) {
            $model->restoreTier = $map['RestoreTier'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}

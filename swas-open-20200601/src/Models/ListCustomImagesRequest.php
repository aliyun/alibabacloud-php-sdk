<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImagesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListCustomImagesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The value of **ClientToken** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the data disk snapshot.
     *
     * @example s-acscasca****
     *
     * @var string
     */
    public $dataSnapshotId;

    /**
     * @description The image IDs of the simple application server. The value can be a JSON array that consists of up to 100 image IDs. Separate multiple image IDs with commas (,).
     *
     * @example ["fe9c66133a9d4688872869726b52****", "794c230fd3e64ea19f83f4d7a0ad****"]
     *
     * @var string
     */
    public $imageIds;

    /**
     * @description The image names of the simple application servers. The value can be a JSON array that consists of up to 100 image names. Separate multiple image names with commas (,).
     *
     * @example ["test1****", "test2****"]
     *
     * @var string
     */
    public $imageNames;

    /**
     * @description The ID of the Simple Application Server instance that the image originates from.
     *
     * @example ace0706b2ac4454d984295a94213****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     *   Maximum value: 100.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the simple application servers corresponding to the custom images. You can call the [ListRegions](https://help.aliyun.com/document_detail/189315.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2bti7cf7yj2i
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Whether to query shared images. Value range:
     *
     * If not filled, all images are returned by default.
     * @example False
     *
     * @var bool
     */
    public $share;

    /**
     * @description The ID of the system disk snapshot.
     *
     * @example s-bp14m09pq8***0g6
     *
     * @var string
     */
    public $systemSnapshotId;

    /**
     * @description Tag N of the custom image.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'dataSnapshotId'   => 'DataSnapshotId',
        'imageIds'         => 'ImageIds',
        'imageNames'       => 'ImageNames',
        'instanceId'       => 'InstanceId',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'regionId'         => 'RegionId',
        'resourceGroupId'  => 'ResourceGroupId',
        'share'            => 'Share',
        'systemSnapshotId' => 'SystemSnapshotId',
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataSnapshotId) {
            $res['DataSnapshotId'] = $this->dataSnapshotId;
        }
        if (null !== $this->imageIds) {
            $res['ImageIds'] = $this->imageIds;
        }
        if (null !== $this->imageNames) {
            $res['ImageNames'] = $this->imageNames;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->share) {
            $res['Share'] = $this->share;
        }
        if (null !== $this->systemSnapshotId) {
            $res['SystemSnapshotId'] = $this->systemSnapshotId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataSnapshotId'])) {
            $model->dataSnapshotId = $map['DataSnapshotId'];
        }
        if (isset($map['ImageIds'])) {
            $model->imageIds = $map['ImageIds'];
        }
        if (isset($map['ImageNames'])) {
            $model->imageNames = $map['ImageNames'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Share'])) {
            $model->share = $map['Share'];
        }
        if (isset($map['SystemSnapshotId'])) {
            $model->systemSnapshotId = $map['SystemSnapshotId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

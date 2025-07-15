<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveAIStudioRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Valid values: 1 to 50.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the virtual studio template that you want to query. This parameter is optional.
     *
     * @example dbe61b87-db9a-448f-8757-a875edb3f944
     *
     * @var string
     */
    public $studioId;

    /**
     * @description The name of the virtual studio template.
     *
     * @example sub02
     *
     * @var string
     */
    public $studioName;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'studioId' => 'StudioId',
        'studioName' => 'StudioName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->studioId) {
            $res['StudioId'] = $this->studioId;
        }
        if (null !== $this->studioName) {
            $res['StudioName'] = $this->studioName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveAIStudioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['StudioId'])) {
            $model->studioId = $map['StudioId'];
        }
        if (isset($map['StudioName'])) {
            $model->studioName = $map['StudioName'];
        }

        return $model;
    }
}

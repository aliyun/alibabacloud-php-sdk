<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeCastersRequest extends Model
{
    /**
     * @description The ID of the production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/2848012.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the ApsaraVideo Live console and click Production Studios in the left-side navigation pane.
     *
     * >
     *
     *   You can find the ID of the production studio in the Instance ID/Name column.
     *
     *   If you leave this parameter empty, the data of all production studios is returned.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The name of the production studio.
     *
     * @example liveCaster****
     *
     * @var string
     */
    public $casterName;

    /**
     * @description The billing method. Valid values:
     *
     *   0: the subscription billing method
     *   1: the pay-as-you-go billing method
     *
     * @example 0
     *
     * @var int
     */
    public $chargeType;

    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2016-06-29T11:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of the production studio. Valid values:
     *
     *   1: general mode
     *   3: lightweight carousel playback mode
     *   4: virtual studio
     *   6: playlist mode
     *
     * @example 1
     *
     * @var string
     */
    public $normType;

    /**
     * @description Specifies whether to sort the production studios in ascending order based on the modification time.
     *
     * >  If you leave this parameter empty, the default value is used. Default value: false.
     *
     * @example false
     *
     * @var string
     */
    public $orderByModifyAsc;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of templates to return on each page. If you leave this parameter empty, the default value is used. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID. For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/2381067.html).
     *
     * @example rg-aekzw******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2016-06-29T09:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the production studio. Valid values:
     *
     *   0: idle
     *   1: streaming
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'casterId' => 'CasterId',
        'casterName' => 'CasterName',
        'chargeType' => 'ChargeType',
        'endTime' => 'EndTime',
        'normType' => 'NormType',
        'orderByModifyAsc' => 'OrderByModifyAsc',
        'ownerId' => 'OwnerId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->normType) {
            $res['NormType'] = $this->normType;
        }
        if (null !== $this->orderByModifyAsc) {
            $res['OrderByModifyAsc'] = $this->orderByModifyAsc;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return DescribeCastersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NormType'])) {
            $model->normType = $map['NormType'];
        }
        if (isset($map['OrderByModifyAsc'])) {
            $model->orderByModifyAsc = $map['OrderByModifyAsc'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

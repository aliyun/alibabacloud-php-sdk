<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListWuyingServerRequest extends Model
{
    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $serverInstanceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $wuyingServerIdList;

    /**
     * @var string
     */
    public $wuyingServerNameOrId;
    protected $_name = [
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'imageId' => 'ImageId',
        'officeSiteId' => 'OfficeSiteId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'serverInstanceType' => 'ServerInstanceType',
        'status' => 'Status',
        'wuyingServerIdList' => 'WuyingServerIdList',
        'wuyingServerNameOrId' => 'WuyingServerNameOrId',
    ];

    public function validate()
    {
        if (\is_array($this->wuyingServerIdList)) {
            Model::validateArray($this->wuyingServerIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->serverInstanceType) {
            $res['ServerInstanceType'] = $this->serverInstanceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->wuyingServerIdList) {
            if (\is_array($this->wuyingServerIdList)) {
                $res['WuyingServerIdList'] = [];
                $n1 = 0;
                foreach ($this->wuyingServerIdList as $item1) {
                    $res['WuyingServerIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wuyingServerNameOrId) {
            $res['WuyingServerNameOrId'] = $this->wuyingServerNameOrId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ServerInstanceType'])) {
            $model->serverInstanceType = $map['ServerInstanceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WuyingServerIdList'])) {
            if (!empty($map['WuyingServerIdList'])) {
                $model->wuyingServerIdList = [];
                $n1 = 0;
                foreach ($map['WuyingServerIdList'] as $item1) {
                    $model->wuyingServerIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WuyingServerNameOrId'])) {
            $model->wuyingServerNameOrId = $map['WuyingServerNameOrId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeAssetListRequest extends Model
{
    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $memberUid;

    /**
     * @var string
     */
    public $newResourceTag;

    /**
     * @var string
     */
    public $outStatistic;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $searchItem;

    /**
     * @var string
     */
    public $sensitiveStatus;

    /**
     * @var string
     */
    public $sgStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'ipVersion' => 'IpVersion',
        'lang' => 'Lang',
        'memberUid' => 'MemberUid',
        'newResourceTag' => 'NewResourceTag',
        'outStatistic' => 'OutStatistic',
        'pageSize' => 'PageSize',
        'regionNo' => 'RegionNo',
        'resourceType' => 'ResourceType',
        'searchItem' => 'SearchItem',
        'sensitiveStatus' => 'SensitiveStatus',
        'sgStatus' => 'SgStatus',
        'status' => 'Status',
        'type' => 'Type',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->newResourceTag) {
            $res['NewResourceTag'] = $this->newResourceTag;
        }

        if (null !== $this->outStatistic) {
            $res['OutStatistic'] = $this->outStatistic;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->searchItem) {
            $res['SearchItem'] = $this->searchItem;
        }

        if (null !== $this->sensitiveStatus) {
            $res['SensitiveStatus'] = $this->sensitiveStatus;
        }

        if (null !== $this->sgStatus) {
            $res['SgStatus'] = $this->sgStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['NewResourceTag'])) {
            $model->newResourceTag = $map['NewResourceTag'];
        }

        if (isset($map['OutStatistic'])) {
            $model->outStatistic = $map['OutStatistic'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SearchItem'])) {
            $model->searchItem = $map['SearchItem'];
        }

        if (isset($map['SensitiveStatus'])) {
            $model->sensitiveStatus = $map['SensitiveStatus'];
        }

        if (isset($map['SgStatus'])) {
            $model->sgStatus = $map['SgStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}

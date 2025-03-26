<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopListInfoRequest\tag;

class ExportDesktopListInfoRequest extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $desktopStatus;

    /**
     * @var string[]
     */
    public $endUserId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $langType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'desktopStatus' => 'DesktopStatus',
        'endUserId' => 'EndUserId',
        'expiredTime' => 'ExpiredTime',
        'groupId' => 'GroupId',
        'langType' => 'LangType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'policyGroupId' => 'PolicyGroupId',
        'regionId' => 'RegionId',
        'tag' => 'Tag',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        if (\is_array($this->endUserId)) {
            Model::validateArray($this->endUserId);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1 = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }

        if (null !== $this->endUserId) {
            if (\is_array($this->endUserId)) {
                $res['EndUserId'] = [];
                $n1 = 0;
                foreach ($this->endUserId as $item1) {
                    $res['EndUserId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->langType) {
            $res['LangType'] = $this->langType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1 = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }

        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = [];
                $n1 = 0;
                foreach ($map['EndUserId'] as $item1) {
                    $model->endUserId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['LangType'])) {
            $model->langType = $map['LangType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

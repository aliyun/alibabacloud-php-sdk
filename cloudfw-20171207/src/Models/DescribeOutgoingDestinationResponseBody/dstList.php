<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationResponseBody\dstList\tagList;

class dstList extends Model
{
    /**
     * @var string
     */
    public $aclRecommendDetail;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $dstDomain;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var string
     */
    public $dstType;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $hasAclRecommend;

    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var bool
     */
    public $isMarkNormal;

    /**
     * @var int
     */
    public $outBytes;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var tagList[]
     */
    public $tagList;
    protected $_name = [
        'aclRecommendDetail' => 'AclRecommendDetail',
        'aclStatus' => 'AclStatus',
        'business' => 'Business',
        'categoryId' => 'CategoryId',
        'categoryName' => 'CategoryName',
        'dstDomain' => 'DstDomain',
        'dstIP' => 'DstIP',
        'dstType' => 'DstType',
        'groupName' => 'GroupName',
        'hasAclRecommend' => 'HasAclRecommend',
        'inBytes' => 'InBytes',
        'isMarkNormal' => 'IsMarkNormal',
        'outBytes' => 'OutBytes',
        'sessionCount' => 'SessionCount',
        'tagList' => 'TagList',
    ];

    public function validate()
    {
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclRecommendDetail) {
            $res['AclRecommendDetail'] = $this->aclRecommendDetail;
        }

        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }

        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->dstDomain) {
            $res['DstDomain'] = $this->dstDomain;
        }

        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }

        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->hasAclRecommend) {
            $res['HasAclRecommend'] = $this->hasAclRecommend;
        }

        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->isMarkNormal) {
            $res['IsMarkNormal'] = $this->isMarkNormal;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AclRecommendDetail'])) {
            $model->aclRecommendDetail = $map['AclRecommendDetail'];
        }

        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }

        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['DstDomain'])) {
            $model->dstDomain = $map['DstDomain'];
        }

        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }

        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['HasAclRecommend'])) {
            $model->hasAclRecommend = $map['HasAclRecommend'];
        }

        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['IsMarkNormal'])) {
            $model->isMarkNormal = $map['IsMarkNormal'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1] = tagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

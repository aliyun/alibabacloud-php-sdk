<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckAdvicesRequest\tagList;

class DescribeCostCheckAdvicesRequest extends Model
{
    /**
     * @var int[]
     */
    public $assumeAliyunIdList;

    /**
     * @var string
     */
    public $checkId;

    /**
     * @var int
     */
    public $checkPlanId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string[]
     */
    public $resourceGroupIdList;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string[]
     */
    public $tagKeys;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @var string[]
     */
    public $tagValues;
    protected $_name = [
        'assumeAliyunIdList' => 'AssumeAliyunIdList',
        'checkId' => 'CheckId',
        'checkPlanId' => 'CheckPlanId',
        'language' => 'Language',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionIds' => 'RegionIds',
        'resourceGroupIdList' => 'ResourceGroupIdList',
        'resourceId' => 'ResourceId',
        'resourceIds' => 'ResourceIds',
        'resourceName' => 'ResourceName',
        'severity' => 'Severity',
        'tagKeys' => 'TagKeys',
        'tagList' => 'TagList',
        'tagValues' => 'TagValues',
    ];

    public function validate()
    {
        if (\is_array($this->assumeAliyunIdList)) {
            Model::validateArray($this->assumeAliyunIdList);
        }
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        if (\is_array($this->resourceGroupIdList)) {
            Model::validateArray($this->resourceGroupIdList);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        if (\is_array($this->tagKeys)) {
            Model::validateArray($this->tagKeys);
        }
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        if (\is_array($this->tagValues)) {
            Model::validateArray($this->tagValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeAliyunIdList) {
            if (\is_array($this->assumeAliyunIdList)) {
                $res['AssumeAliyunIdList'] = [];
                $n1 = 0;
                foreach ($this->assumeAliyunIdList as $item1) {
                    $res['AssumeAliyunIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkPlanId) {
            $res['CheckPlanId'] = $this->checkPlanId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['RegionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['RegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceGroupIdList) {
            if (\is_array($this->resourceGroupIdList)) {
                $res['ResourceGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->resourceGroupIdList as $item1) {
                    $res['ResourceGroupIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->tagKeys) {
            if (\is_array($this->tagKeys)) {
                $res['TagKeys'] = [];
                $n1 = 0;
                foreach ($this->tagKeys as $item1) {
                    $res['TagKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tagValues) {
            if (\is_array($this->tagValues)) {
                $res['TagValues'] = [];
                $n1 = 0;
                foreach ($this->tagValues as $item1) {
                    $res['TagValues'][$n1++] = $item1;
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
        if (isset($map['AssumeAliyunIdList'])) {
            if (!empty($map['AssumeAliyunIdList'])) {
                $model->assumeAliyunIdList = [];
                $n1 = 0;
                foreach ($map['AssumeAliyunIdList'] as $item1) {
                    $model->assumeAliyunIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckPlanId'])) {
            $model->checkPlanId = $map['CheckPlanId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['RegionIds'] as $item1) {
                    $model->regionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceGroupIdList'])) {
            if (!empty($map['ResourceGroupIdList'])) {
                $model->resourceGroupIdList = [];
                $n1 = 0;
                foreach ($map['ResourceGroupIdList'] as $item1) {
                    $model->resourceGroupIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['TagKeys'])) {
            if (!empty($map['TagKeys'])) {
                $model->tagKeys = [];
                $n1 = 0;
                foreach ($map['TagKeys'] as $item1) {
                    $model->tagKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1++] = tagList::fromMap($item1);
                }
            }
        }

        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = [];
                $n1 = 0;
                foreach ($map['TagValues'] as $item1) {
                    $model->tagValues[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

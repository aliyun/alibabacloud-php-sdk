<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeVulDesktopsRequest extends Model
{
    /**
     * @var string
     */
    public $cveId;

    /**
     * @var string[]
     */
    public $desktopIdList;

    /**
     * @var bool
     */
    public $includeFixResult;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var bool
     */
    public $onlyCurrentMonthFixAttempted;

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
    public $patchId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $searchRegionId;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string
     */
    public $vulLevel;
    protected $_name = [
        'cveId' => 'CveId',
        'desktopIdList' => 'DesktopIdList',
        'includeFixResult' => 'IncludeFixResult',
        'language' => 'Language',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'onlyCurrentMonthFixAttempted' => 'OnlyCurrentMonthFixAttempted',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'patchId' => 'PatchId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'searchRegionId' => 'SearchRegionId',
        'statusList' => 'StatusList',
        'vulLevel' => 'VulLevel',
    ];

    public function validate()
    {
        if (\is_array($this->desktopIdList)) {
            Model::validateArray($this->desktopIdList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }

        if (null !== $this->desktopIdList) {
            if (\is_array($this->desktopIdList)) {
                $res['DesktopIdList'] = [];
                $n1 = 0;
                foreach ($this->desktopIdList as $item1) {
                    $res['DesktopIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeFixResult) {
            $res['IncludeFixResult'] = $this->includeFixResult;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->onlyCurrentMonthFixAttempted) {
            $res['OnlyCurrentMonthFixAttempted'] = $this->onlyCurrentMonthFixAttempted;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->patchId) {
            $res['PatchId'] = $this->patchId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->searchRegionId) {
            $res['SearchRegionId'] = $this->searchRegionId;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
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
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }

        if (isset($map['DesktopIdList'])) {
            if (!empty($map['DesktopIdList'])) {
                $model->desktopIdList = [];
                $n1 = 0;
                foreach ($map['DesktopIdList'] as $item1) {
                    $model->desktopIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IncludeFixResult'])) {
            $model->includeFixResult = $map['IncludeFixResult'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OnlyCurrentMonthFixAttempted'])) {
            $model->onlyCurrentMonthFixAttempted = $map['OnlyCurrentMonthFixAttempted'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PatchId'])) {
            $model->patchId = $map['PatchId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SearchRegionId'])) {
            $model->searchRegionId = $map['SearchRegionId'];
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        return $model;
    }
}

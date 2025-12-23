<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeDesktopMetadataRequest extends Model
{
    /**
     * @var string
     */
    public $creationTimeStart;

    /**
     * @var string[]
     */
    public $desktopIds;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $includeDesktopGroup;

    /**
     * @var string
     */
    public $keyword;

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
    public $operationTimeStart;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $searchRegionId;
    protected $_name = [
        'creationTimeStart' => 'CreationTimeStart',
        'desktopIds' => 'DesktopIds',
        'groupId' => 'GroupId',
        'hostName' => 'HostName',
        'imageId' => 'ImageId',
        'includeDesktopGroup' => 'IncludeDesktopGroup',
        'keyword' => 'Keyword',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'operationTimeStart' => 'OperationTimeStart',
        'regionId' => 'RegionId',
        'searchRegionId' => 'SearchRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopIds)) {
            Model::validateArray($this->desktopIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTimeStart) {
            $res['CreationTimeStart'] = $this->creationTimeStart;
        }

        if (null !== $this->desktopIds) {
            if (\is_array($this->desktopIds)) {
                $res['DesktopIds'] = [];
                $n1 = 0;
                foreach ($this->desktopIds as $item1) {
                    $res['DesktopIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->includeDesktopGroup) {
            $res['IncludeDesktopGroup'] = $this->includeDesktopGroup;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
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

        if (null !== $this->operationTimeStart) {
            $res['OperationTimeStart'] = $this->operationTimeStart;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->searchRegionId) {
            $res['SearchRegionId'] = $this->searchRegionId;
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
        if (isset($map['CreationTimeStart'])) {
            $model->creationTimeStart = $map['CreationTimeStart'];
        }

        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = [];
                $n1 = 0;
                foreach ($map['DesktopIds'] as $item1) {
                    $model->desktopIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['IncludeDesktopGroup'])) {
            $model->includeDesktopGroup = $map['IncludeDesktopGroup'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
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

        if (isset($map['OperationTimeStart'])) {
            $model->operationTimeStart = $map['OperationTimeStart'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SearchRegionId'])) {
            $model->searchRegionId = $map['SearchRegionId'];
        }

        return $model;
    }
}

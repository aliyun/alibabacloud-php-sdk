<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeDirectoriesRequest extends Model
{
    /**
     * @var string[]
     */
    public $directoryId;
    /**
     * @var string
     */
    public $directoryStatus;
    /**
     * @var string
     */
    public $directoryType;
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
    public $regionId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'directoryId'     => 'DirectoryId',
        'directoryStatus' => 'DirectoryStatus',
        'directoryType'   => 'DirectoryType',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->directoryId)) {
            Model::validateArray($this->directoryId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            if (\is_array($this->directoryId)) {
                $res['DirectoryId'] = [];
                $n1                 = 0;
                foreach ($this->directoryId as $item1) {
                    $res['DirectoryId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->directoryStatus) {
            $res['DirectoryStatus'] = $this->directoryStatus;
        }

        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DirectoryId'])) {
            if (!empty($map['DirectoryId'])) {
                $model->directoryId = [];
                $n1                 = 0;
                foreach ($map['DirectoryId'] as $item1) {
                    $model->directoryId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DirectoryStatus'])) {
            $model->directoryStatus = $map['DirectoryStatus'];
        }

        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

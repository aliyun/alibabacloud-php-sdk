<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeNASFileSystemsRequest extends Model
{
    /**
     * @var string[]
     */
    public $fileSystemId;
    /**
     * @var bool
     */
    public $matchCompatibleProfile;
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
    public $regionId;
    protected $_name = [
        'fileSystemId'           => 'FileSystemId',
        'matchCompatibleProfile' => 'MatchCompatibleProfile',
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'officeSiteId'           => 'OfficeSiteId',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->fileSystemId)) {
            Model::validateArray($this->fileSystemId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            if (\is_array($this->fileSystemId)) {
                $res['FileSystemId'] = [];
                $n1                  = 0;
                foreach ($this->fileSystemId as $item1) {
                    $res['FileSystemId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->matchCompatibleProfile) {
            $res['MatchCompatibleProfile'] = $this->matchCompatibleProfile;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['FileSystemId'])) {
            if (!empty($map['FileSystemId'])) {
                $model->fileSystemId = [];
                $n1                  = 0;
                foreach ($map['FileSystemId'] as $item1) {
                    $model->fileSystemId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MatchCompatibleProfile'])) {
            $model->matchCompatibleProfile = $map['MatchCompatibleProfile'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

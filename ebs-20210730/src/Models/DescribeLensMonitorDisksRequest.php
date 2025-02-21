<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class DescribeLensMonitorDisksRequest extends Model
{
    /**
     * @var string
     */
    public $diskCategory;
    /**
     * @var string
     */
    public $diskIdPattern;
    /**
     * @var string[]
     */
    public $diskIds;
    /**
     * @var string[]
     */
    public $lensTags;
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
    protected $_name = [
        'diskCategory'  => 'DiskCategory',
        'diskIdPattern' => 'DiskIdPattern',
        'diskIds'       => 'DiskIds',
        'lensTags'      => 'LensTags',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->diskIds)) {
            Model::validateArray($this->diskIds);
        }
        if (\is_array($this->lensTags)) {
            Model::validateArray($this->lensTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }

        if (null !== $this->diskIdPattern) {
            $res['DiskIdPattern'] = $this->diskIdPattern;
        }

        if (null !== $this->diskIds) {
            if (\is_array($this->diskIds)) {
                $res['DiskIds'] = [];
                $n1             = 0;
                foreach ($this->diskIds as $item1) {
                    $res['DiskIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lensTags) {
            if (\is_array($this->lensTags)) {
                $res['LensTags'] = [];
                $n1              = 0;
                foreach ($this->lensTags as $item1) {
                    $res['LensTags'][$n1++] = $item1;
                }
            }
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }

        if (isset($map['DiskIdPattern'])) {
            $model->diskIdPattern = $map['DiskIdPattern'];
        }

        if (isset($map['DiskIds'])) {
            if (!empty($map['DiskIds'])) {
                $model->diskIds = [];
                $n1             = 0;
                foreach ($map['DiskIds'] as $item1) {
                    $model->diskIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LensTags'])) {
            if (!empty($map['LensTags'])) {
                $model->lensTags = [];
                $n1              = 0;
                foreach ($map['LensTags'] as $item1) {
                    $model->lensTags[$n1++] = $item1;
                }
            }
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

        return $model;
    }
}

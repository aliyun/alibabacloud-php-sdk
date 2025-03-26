<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeVirtualMFADevicesRequest extends Model
{
    /**
     * @var string[]
     */
    public $endUserId;

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
        'endUserId' => 'EndUserId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->endUserId)) {
            Model::validateArray($this->endUserId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endUserId) {
            if (\is_array($this->endUserId)) {
                $res['EndUserId'] = [];
                $n1 = 0;
                foreach ($this->endUserId as $item1) {
                    $res['EndUserId'][$n1++] = $item1;
                }
            }
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
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = [];
                $n1 = 0;
                foreach ($map['EndUserId'] as $item1) {
                    $model->endUserId[$n1++] = $item1;
                }
            }
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesRequest\tag;

class DescribeNetworkPackagesRequest extends Model
{
    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'internetChargeType' => 'InternetChargeType',
        'maxResults' => 'MaxResults',
        'networkPackageId' => 'NetworkPackageId',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->networkPackageId)) {
            Model::validateArray($this->networkPackageId);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->networkPackageId) {
            if (\is_array($this->networkPackageId)) {
                $res['NetworkPackageId'] = [];
                $n1 = 0;
                foreach ($this->networkPackageId as $item1) {
                    $res['NetworkPackageId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NetworkPackageId'])) {
            if (!empty($map['NetworkPackageId'])) {
                $model->networkPackageId = [];
                $n1 = 0;
                foreach ($map['NetworkPackageId'] as $item1) {
                    $model->networkPackageId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

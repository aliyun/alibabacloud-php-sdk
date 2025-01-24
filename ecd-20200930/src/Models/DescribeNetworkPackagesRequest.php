<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
        'internetChargeType' => 'InternetChargeType',
        'maxResults'         => 'MaxResults',
        'networkPackageId'   => 'NetworkPackageId',
        'nextToken'          => 'NextToken',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->networkPackageId)) {
            Model::validateArray($this->networkPackageId);
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
                $n1                      = 0;
                foreach ($this->networkPackageId as $item1) {
                    $res['NetworkPackageId'][$n1++] = $item1;
                }
            }
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
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NetworkPackageId'])) {
            if (!empty($map['NetworkPackageId'])) {
                $model->networkPackageId = [];
                $n1                      = 0;
                foreach ($map['NetworkPackageId'] as $item1) {
                    $model->networkPackageId[$n1++] = $item1;
                }
            }
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

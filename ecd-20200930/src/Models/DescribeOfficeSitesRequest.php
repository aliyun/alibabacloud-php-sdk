<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeOfficeSitesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityProtection;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteType' => 'OfficeSiteType',
        'regionId' => 'RegionId',
        'securityProtection' => 'SecurityProtection',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->officeSiteId)) {
            Model::validateArray($this->officeSiteId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->officeSiteId) {
            if (\is_array($this->officeSiteId)) {
                $res['OfficeSiteId'] = [];
                $n1 = 0;
                foreach ($this->officeSiteId as $item1) {
                    $res['OfficeSiteId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityProtection) {
            $res['SecurityProtection'] = $this->securityProtection;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OfficeSiteId'])) {
            if (!empty($map['OfficeSiteId'])) {
                $model->officeSiteId = [];
                $n1 = 0;
                foreach ($map['OfficeSiteId'] as $item1) {
                    $model->officeSiteId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityProtection'])) {
            $model->securityProtection = $map['SecurityProtection'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

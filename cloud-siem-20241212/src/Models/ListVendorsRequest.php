<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListVendorsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

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
     * @var int
     */
    public $roleFor;

    /**
     * @var string[]
     */
    public $vendorIds;

    /**
     * @var string
     */
    public $vendorName;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'lang' => 'Lang',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'vendorIds' => 'VendorIds',
        'vendorName' => 'VendorName',
        'vendorType' => 'VendorType',
    ];

    public function validate()
    {
        if (\is_array($this->vendorIds)) {
            Model::validateArray($this->vendorIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->vendorIds) {
            if (\is_array($this->vendorIds)) {
                $res['VendorIds'] = [];
                $n1 = 0;
                foreach ($this->vendorIds as $item1) {
                    $res['VendorIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
        }

        if (null !== $this->vendorType) {
            $res['VendorType'] = $this->vendorType;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['VendorIds'])) {
            if (!empty($map['VendorIds'])) {
                $model->vendorIds = [];
                $n1 = 0;
                foreach ($map['VendorIds'] as $item1) {
                    $model->vendorIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        if (isset($map['VendorType'])) {
            $model->vendorType = $map['VendorType'];
        }

        return $model;
    }
}

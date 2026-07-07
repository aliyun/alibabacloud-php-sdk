<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeEdgeMobileAgentPackagesRequest extends Model
{
    /**
     * @var string
     */
    public $deviceClass;

    /**
     * @var string
     */
    public $licenseKeys;

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
    public $packageIds;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'deviceClass' => 'DeviceClass',
        'licenseKeys' => 'LicenseKeys',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'packageIds' => 'PackageIds',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceClass) {
            $res['DeviceClass'] = $this->deviceClass;
        }

        if (null !== $this->licenseKeys) {
            $res['LicenseKeys'] = $this->licenseKeys;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->packageIds) {
            $res['PackageIds'] = $this->packageIds;
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
        if (isset($map['DeviceClass'])) {
            $model->deviceClass = $map['DeviceClass'];
        }

        if (isset($map['LicenseKeys'])) {
            $model->licenseKeys = $map['LicenseKeys'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PackageIds'])) {
            $model->packageIds = $map['PackageIds'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

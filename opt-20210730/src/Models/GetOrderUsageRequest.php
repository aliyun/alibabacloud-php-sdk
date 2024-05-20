<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Opt\V20210730\Models;

use AlibabaCloud\Tea\Model;

class GetOrderUsageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $licenseKey;

    /**
     * @description This parameter is required.
     *
     * @example MP
     *
     * @var string
     */
    public $relService;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $resourceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $timeRange;
    protected $_name = [
        'licenseKey'   => 'LicenseKey',
        'relService'   => 'RelService',
        'resourceType' => 'ResourceType',
        'timeRange'    => 'TimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
        }
        if (null !== $this->relService) {
            $res['RelService'] = $this->relService;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->timeRange) {
            $res['TimeRange'] = $this->timeRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrderUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }
        if (isset($map['RelService'])) {
            $model->relService = $map['RelService'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TimeRange'])) {
            $model->timeRange = $map['TimeRange'];
        }

        return $model;
    }
}

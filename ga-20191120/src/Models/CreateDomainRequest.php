<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainRequest extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * You can enter up to 50 IDs.
     * @var string[]
     */
    public $acceleratorIds;

    /**
     * @description The accelerated domain name to be added.
     *
     * Wildcard domain names are supported. A wildcard domain name must start with `*.`, such as `*.example.com`.
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorIds' => 'AcceleratorIds',
        'domain'         => 'Domain',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorIds) {
            $res['AcceleratorIds'] = $this->acceleratorIds;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorIds'])) {
            if (!empty($map['AcceleratorIds'])) {
                $model->acceleratorIds = $map['AcceleratorIds'];
            }
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

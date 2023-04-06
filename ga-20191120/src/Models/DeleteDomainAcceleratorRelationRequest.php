<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DeleteDomainAcceleratorRelationRequest extends Model
{
    /**
     * @description The ID of the GA instance to be disassociated. You can specify up to 50 IDs.
     *
     * If you leave this parameter empty, all GA instances associated with the specified domain name are disassociated.
     * @var string[]
     */
    public $acceleratorIds;

    /**
     * @description The accelerated domain name to be disassociated.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the region where the Global Accelerator (GA) instance is deployed. Set the value to **cn-hangzhou**.
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
     * @return DeleteDomainAcceleratorRelationRequest
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

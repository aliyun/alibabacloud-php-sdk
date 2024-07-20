<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRequest extends Model
{
    /**
     * @description The new accelerated domain name.
     *
     * This parameter is required.
     * @example example.net
     *
     * @var string
     */
    public $domain;

    /**
     * @description The region ID of the GA instance. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The accelerated domain name to be modified.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $targetDomain;
    protected $_name = [
        'domain'       => 'Domain',
        'regionId'     => 'RegionId',
        'targetDomain' => 'TargetDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetDomain) {
            $res['TargetDomain'] = $this->targetDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetDomain'])) {
            $model->targetDomain = $map['TargetDomain'];
        }

        return $model;
    }
}

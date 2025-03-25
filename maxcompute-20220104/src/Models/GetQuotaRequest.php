<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetQuotaRequest extends Model
{
    /**
     * @description The trusted AccessKey pairs.
     *
     * @example null
     *
     * @var string
     */
    public $akProven;

    /**
     * @description Specifies whether to include submodules. Valid values: -true: The request includes submodules. -false: The request does not include submodules. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $mock;

    /**
     * @description The region ID.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $region;

    /**
     * @description The tenant ID.
     *
     * @example 520539530998273
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'akProven' => 'AkProven',
        'mock' => 'mock',
        'region' => 'region',
        'tenantId' => 'tenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->akProven) {
            $res['AkProven'] = $this->akProven;
        }
        if (null !== $this->mock) {
            $res['mock'] = $this->mock;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AkProven'])) {
            $model->akProven = $map['AkProven'];
        }
        if (isset($map['mock'])) {
            $model->mock = $map['mock'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}

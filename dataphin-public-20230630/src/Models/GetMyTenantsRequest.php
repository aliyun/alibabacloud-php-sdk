<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetMyTenantsRequest extends Model
{
    /**
     * @var string[]
     */
    public $featureCodeList;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'featureCodeList' => 'FeatureCodeList',
        'opTenantId'      => 'OpTenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureCodeList) {
            $res['FeatureCodeList'] = $this->featureCodeList;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMyTenantsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureCodeList'])) {
            if (!empty($map['FeatureCodeList'])) {
                $model->featureCodeList = $map['FeatureCodeList'];
            }
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}

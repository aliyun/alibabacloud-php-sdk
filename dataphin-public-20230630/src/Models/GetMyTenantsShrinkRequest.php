<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetMyTenantsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $featureCodeListShrink;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'featureCodeListShrink' => 'FeatureCodeList',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureCodeListShrink) {
            $res['FeatureCodeList'] = $this->featureCodeListShrink;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMyTenantsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureCodeList'])) {
            $model->featureCodeListShrink = $map['FeatureCodeList'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}

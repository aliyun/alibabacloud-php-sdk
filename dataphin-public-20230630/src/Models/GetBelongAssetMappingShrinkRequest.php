<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetBelongAssetMappingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $assetMappingQueryShrink;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'assetMappingQueryShrink' => 'AssetMappingQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetMappingQueryShrink) {
            $res['AssetMappingQuery'] = $this->assetMappingQueryShrink;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
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
        if (isset($map['AssetMappingQuery'])) {
            $model->assetMappingQueryShrink = $map['AssetMappingQuery'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}

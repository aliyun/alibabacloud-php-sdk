<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBelongAssetMappingRequest\assetMappingQuery;

class GetBelongAssetMappingRequest extends Model
{
    /**
     * @var assetMappingQuery
     */
    public $assetMappingQuery;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'assetMappingQuery' => 'AssetMappingQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->assetMappingQuery) {
            $this->assetMappingQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetMappingQuery) {
            $res['AssetMappingQuery'] = null !== $this->assetMappingQuery ? $this->assetMappingQuery->toArray($noStream) : $this->assetMappingQuery;
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
            $model->assetMappingQuery = assetMappingQuery::fromMap($map['AssetMappingQuery']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}

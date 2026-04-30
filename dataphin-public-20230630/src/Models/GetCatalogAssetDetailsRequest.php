<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsRequest\getCatalogAssetDetailsQuery;

class GetCatalogAssetDetailsRequest extends Model
{
    /**
     * @var getCatalogAssetDetailsQuery
     */
    public $getCatalogAssetDetailsQuery;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'getCatalogAssetDetailsQuery' => 'GetCatalogAssetDetailsQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->getCatalogAssetDetailsQuery) {
            $this->getCatalogAssetDetailsQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->getCatalogAssetDetailsQuery) {
            $res['GetCatalogAssetDetailsQuery'] = null !== $this->getCatalogAssetDetailsQuery ? $this->getCatalogAssetDetailsQuery->toArray($noStream) : $this->getCatalogAssetDetailsQuery;
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
        if (isset($map['GetCatalogAssetDetailsQuery'])) {
            $model->getCatalogAssetDetailsQuery = getCatalogAssetDetailsQuery::fromMap($map['GetCatalogAssetDetailsQuery']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}

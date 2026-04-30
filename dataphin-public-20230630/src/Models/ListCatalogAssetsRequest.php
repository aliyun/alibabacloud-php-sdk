<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListCatalogAssetsRequest\listCatalogAssetsQuery;

class ListCatalogAssetsRequest extends Model
{
    /**
     * @var listCatalogAssetsQuery
     */
    public $listCatalogAssetsQuery;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'listCatalogAssetsQuery' => 'ListCatalogAssetsQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->listCatalogAssetsQuery) {
            $this->listCatalogAssetsQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listCatalogAssetsQuery) {
            $res['ListCatalogAssetsQuery'] = null !== $this->listCatalogAssetsQuery ? $this->listCatalogAssetsQuery->toArray($noStream) : $this->listCatalogAssetsQuery;
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
        if (isset($map['ListCatalogAssetsQuery'])) {
            $model->listCatalogAssetsQuery = listCatalogAssetsQuery::fromMap($map['ListCatalogAssetsQuery']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}

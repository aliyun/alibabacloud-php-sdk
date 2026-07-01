<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsRequest\datasetQuery;

class ListDatasetsRequest extends Model
{
    /**
     * @var datasetQuery
     */
    public $datasetQuery;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'datasetQuery' => 'DatasetQuery',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->datasetQuery) {
            $this->datasetQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetQuery) {
            $res['DatasetQuery'] = null !== $this->datasetQuery ? $this->datasetQuery->toArray($noStream) : $this->datasetQuery;
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
        if (isset($map['DatasetQuery'])) {
            $model->datasetQuery = datasetQuery::fromMap($map['DatasetQuery']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}

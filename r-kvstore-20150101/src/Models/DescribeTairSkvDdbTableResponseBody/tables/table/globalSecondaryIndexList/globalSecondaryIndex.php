<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairSkvDdbTableResponseBody\tables\table\globalSecondaryIndexList;

use AlibabaCloud\Dara\Model;

class globalSecondaryIndex extends Model
{
    /**
     * @var string
     */
    public $gsiId;

    /**
     * @var string
     */
    public $indexName;
    protected $_name = [
        'gsiId' => 'GsiId',
        'indexName' => 'IndexName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gsiId) {
            $res['GsiId'] = $this->gsiId;
        }

        if (null !== $this->indexName) {
            $res['IndexName'] = $this->indexName;
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
        if (isset($map['GsiId'])) {
            $model->gsiId = $map['GsiId'];
        }

        if (isset($map['IndexName'])) {
            $model->indexName = $map['IndexName'];
        }

        return $model;
    }
}

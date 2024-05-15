<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsResponseBody\data\schema;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[][]
     */
    public $documents;

    /**
     * @example 54d1a616d95a4a01ba58967a9115b649
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description scheme
     *
     * @var schema
     */
    public $schema;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'documents'     => 'Documents',
        'nextPageToken' => 'NextPageToken',
        'schema'        => 'Schema',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documents) {
            $res['Documents'] = $this->documents;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->schema) {
            $res['Schema'] = null !== $this->schema ? $this->schema->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Documents'])) {
            if (!empty($map['Documents'])) {
                $model->documents = $map['Documents'];
            }
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['Schema'])) {
            $model->schema = schema::fromMap($map['Schema']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

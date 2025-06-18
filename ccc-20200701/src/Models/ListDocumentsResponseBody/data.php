<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsResponseBody\data\schema;

class data extends Model
{
    /**
     * @var mixed[][]
     */
    public $documents;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var schema
     */
    public $schema;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'documents' => 'Documents',
        'nextPageToken' => 'NextPageToken',
        'schema' => 'Schema',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->documents)) {
            Model::validateArray($this->documents);
        }
        if (null !== $this->schema) {
            $this->schema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documents) {
            if (\is_array($this->documents)) {
                $res['Documents'] = [];
                $n1 = 0;
                foreach ($this->documents as $item1) {
                    if (\is_array($item1)) {
                        $res['Documents'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Documents'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->schema) {
            $res['Schema'] = null !== $this->schema ? $this->schema->toArray($noStream) : $this->schema;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Documents'])) {
            if (!empty($map['Documents'])) {
                $model->documents = [];
                $n1 = 0;
                foreach ($map['Documents'] as $item1) {
                    if (!empty($item1)) {
                        $model->documents[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->documents[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
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

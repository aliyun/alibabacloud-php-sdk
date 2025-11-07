<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaResponseBody\schemas;

class GetInventorySchemaResponseBody extends Model
{
    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var schemas[]
     */
    public $schemas;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'schemas' => 'Schemas',
    ];

    public function validate()
    {
        if (\is_array($this->schemas)) {
            Model::validateArray($this->schemas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->schemas) {
            if (\is_array($this->schemas)) {
                $res['Schemas'] = [];
                $n1 = 0;
                foreach ($this->schemas as $item1) {
                    $res['Schemas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Schemas'])) {
            if (!empty($map['Schemas'])) {
                $model->schemas = [];
                $n1 = 0;
                foreach ($map['Schemas'] as $item1) {
                    $model->schemas[$n1] = schemas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

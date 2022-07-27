<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaResponseBody\schemas;
use AlibabaCloud\Tea\Model;

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
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'schemas'    => 'Schemas',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Schemas'] = [];
            if (null !== $this->schemas && \is_array($this->schemas)) {
                $n = 0;
                foreach ($this->schemas as $item) {
                    $res['Schemas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInventorySchemaResponseBody
     */
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
                $n              = 0;
                foreach ($map['Schemas'] as $item) {
                    $model->schemas[$n++] = null !== $item ? schemas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

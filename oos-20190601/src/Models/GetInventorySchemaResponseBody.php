<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaResponseBody\schemas;
use AlibabaCloud\Tea\Model;

class GetInventorySchemaResponseBody extends Model
{
    /**
     * @description The number of entries per page.
     *
     * @example 1
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The pagination token that was used in the next request to retrieve a new page of results.
     *
     * @example gAAAAABfh8MVLQI9AuKGACLgjbsXbWs-Mna47IDM6tr6wK7TZ1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 89117642-7167-4F4D-B7F1-876582279E3E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The detailed configurations of the configuration list.
     *
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The query parameters.
     *
     * This parameter is required.
     *
     * @var parameters
     */
    public $parameters;

    /**
     * @description The query type. Valid values:
     *
     *   **timeseries**: queries time series data.
     *   **table**: queries table data.
     *   **timeseries_and_table**: queries time series data and table data at the same time.
     *
     * This parameter is required.
     *
     * @example timeseries_and_table
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The schema ID.
     *
     * This parameter is required.
     *
     * @example ecs:GeneralSchema
     *
     * @var string
     */
    public $schemaId;
    protected $_name = [
        'parameters' => 'Parameters',
        'queryType' => 'QueryType',
        'schemaId' => 'SchemaId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toMap() : null;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parameters'])) {
            $model->parameters = parameters::fromMap($map['Parameters']);
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        return $model;
    }
}

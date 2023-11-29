<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListLogStoresRequest extends Model
{
    /**
     * @description The name of the Logstore. Fuzzy match is supported. For example, if you enter test, Logstores whose name contains test are returned.
     *
     * @example my-logstore
     *
     * @var string
     */
    public $logstoreName;

    /**
     * @description The type of the Logstore. Valid values: standard and query.
     *
     *   **standard**: Standard Logstore. This type of Logstore supports the log analysis feature and is suitable for scenarios such as real-time monitoring and interactive analysis. You can also use this type of Logstore to build a comprehensive observability system.
     *   **query**: Query Logstore. This type of Logstore supports high-performance queries. The index traffic fee of a Query Logstore is approximately half that of a Standard Logstore. Query Logstores do not support SQL analysis. Query Logstores are suitable for scenarios in which the volume of data is large, the log retention period is long, or log analysis is not required. Log retention periods of weeks or months are considered long.
     *
     * @example standard
     *
     * @var string
     */
    public $mode;

    /**
     * @description The line from which the query starts. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The number of entries per page. Maximum value: 500. Default value: 500.
     *
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description The type of the data that you want to query. Valid values:
     *
     *   None: logs
     *   Metrics: metrics
     *
     * @example None
     *
     * @var string
     */
    public $telemetryType;
    protected $_name = [
        'logstoreName'  => 'logstoreName',
        'mode'          => 'mode',
        'offset'        => 'offset',
        'size'          => 'size',
        'telemetryType' => 'telemetryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstoreName) {
            $res['logstoreName'] = $this->logstoreName;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->telemetryType) {
            $res['telemetryType'] = $this->telemetryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogStoresRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logstoreName'])) {
            $model->logstoreName = $map['logstoreName'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['telemetryType'])) {
            $model->telemetryType = $map['telemetryType'];
        }

        return $model;
    }
}

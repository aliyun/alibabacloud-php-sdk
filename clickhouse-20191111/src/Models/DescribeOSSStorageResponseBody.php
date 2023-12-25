<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DescribeOSSStorageResponseBody extends Model
{
    /**
     * @description Indicates whether tiered storage of hot data and cold data is supported. Valid values:
     *
     *   **true**: Tiered storage of hot data and cold data is supported.
     *   **false**: Tiered storage of hot data and cold data is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $coldStorage;

    /**
     * @description The parameters for tiered storage of hot data and cold data.
     *
     * @example [{ "currentValue":"0.1", "defaultValue":"0.1", "desc":"Ratio of free disk space. When the ratio exceeds the value of configuration parameter, ClickHouse start to move data to the cold storage", "name":"move_factor", "restart":true, "valueRange":"(0, 1]" },{ "currentValue":"true", "defaultValue":"true", "desc":"Disables merging of data parts on cold storage", "name":"prefer_not_to_merge", "restart":true, "valueRange":"true|false" }]
     *
     * @var string
     */
    public $policy;

    /**
     * @description The request ID.
     *
     * @example aadbb456-ebf7-4ed8-9671-fad9f3846ca4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The state of tiered storage of hot data and cold data. Valid values:
     *
     *   **CREATING**: Tiered storage of hot data and cold data is being enabled.
     *   **DISABLE**: Tiered storage of hot data and cold data is not enabled.
     *   **ENABLE**: Tiered storage of hot data and cold data is enabled.
     *
     * @example ENABLE
     *
     * @var string
     */
    public $state;

    /**
     * @description The space used for tiered storage of hot data and cold data. Unit: GB.
     *
     * @example 0.00
     *
     * @var string
     */
    public $storageUsage;
    protected $_name = [
        'coldStorage'  => 'ColdStorage',
        'policy'       => 'Policy',
        'requestId'    => 'RequestId',
        'state'        => 'State',
        'storageUsage' => 'StorageUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldStorage) {
            $res['ColdStorage'] = $this->coldStorage;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->storageUsage) {
            $res['StorageUsage'] = $this->storageUsage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOSSStorageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdStorage'])) {
            $model->coldStorage = $map['ColdStorage'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StorageUsage'])) {
            $model->storageUsage = $map['StorageUsage'];
        }

        return $model;
    }
}

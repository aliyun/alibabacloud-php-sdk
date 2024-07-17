<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ReindexRequest extends Model
{
    /**
     * @description The timestamp in seconds. The value must be of the INTEGER type. This parameter is required if you specify an API data source.
     *
     * @example 1640867288
     *
     * @var int
     */
    public $dataTimeSec;

    /**
     * @description oss data path
     *
     * @example oss://opensearch
     *
     * @var string
     */
    public $ossDataPath;

    /**
     * @description The partition in the MaxCompute table. This parameter is required if type is set to odps.
     *
     * @example ds=20220713
     *
     * @var string
     */
    public $partition;
    protected $_name = [
        'dataTimeSec' => 'dataTimeSec',
        'ossDataPath' => 'ossDataPath',
        'partition'   => 'partition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataTimeSec) {
            $res['dataTimeSec'] = $this->dataTimeSec;
        }
        if (null !== $this->ossDataPath) {
            $res['ossDataPath'] = $this->ossDataPath;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReindexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataTimeSec'])) {
            $model->dataTimeSec = $map['dataTimeSec'];
        }
        if (isset($map['ossDataPath'])) {
            $model->ossDataPath = $map['ossDataPath'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        return $model;
    }
}

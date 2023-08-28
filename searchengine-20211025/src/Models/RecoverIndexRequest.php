<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class RecoverIndexRequest extends Model
{
    /**
     * @description buildDeployId
     *
     * @example 277
     *
     * @var int
     */
    public $buildDeployId;

    /**
     * @example ha-cn-pl32rf0js04_odps_first
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description generation
     *
     * @example 1653018575
     *
     * @var string
     */
    public $generation;

    /**
     * @example main_index
     *
     * @var string
     */
    public $indexName;
    protected $_name = [
        'buildDeployId'  => 'buildDeployId',
        'dataSourceName' => 'dataSourceName',
        'generation'     => 'generation',
        'indexName'      => 'indexName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildDeployId) {
            $res['buildDeployId'] = $this->buildDeployId;
        }
        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }
        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoverIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buildDeployId'])) {
            $model->buildDeployId = $map['buildDeployId'];
        }
        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
        }
        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }
        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }

        return $model;
    }
}

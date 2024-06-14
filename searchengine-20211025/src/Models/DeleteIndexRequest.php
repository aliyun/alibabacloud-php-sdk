<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class DeleteIndexRequest extends Model
{
    /**
     * @description The data source
     *
     * This parameter is required.
     * @example ha-cn-pl32rf0js04_test
     *
     * @var string
     */
    public $dataSource;

    /**
     * @var bool
     */
    public $deleteDataSource;
    protected $_name = [
        'dataSource'       => 'dataSource',
        'deleteDataSource' => 'deleteDataSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSource) {
            $res['dataSource'] = $this->dataSource;
        }
        if (null !== $this->deleteDataSource) {
            $res['deleteDataSource'] = $this->deleteDataSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSource'])) {
            $model->dataSource = $map['dataSource'];
        }
        if (isset($map['deleteDataSource'])) {
            $model->deleteDataSource = $map['deleteDataSource'];
        }

        return $model;
    }
}

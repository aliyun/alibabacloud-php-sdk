<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class DeleteIndexRequest extends Model
{
    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var bool
     */
    public $deleteDataSource;
    protected $_name = [
        'dataSource' => 'dataSource',
        'deleteDataSource' => 'deleteDataSource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

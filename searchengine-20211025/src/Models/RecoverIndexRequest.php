<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class RecoverIndexRequest extends Model
{
    /**
     * @var int
     */
    public $buildDeployId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $generation;

    /**
     * @var string
     */
    public $indexName;
    protected $_name = [
        'buildDeployId' => 'buildDeployId',
        'dataSourceName' => 'dataSourceName',
        'generation' => 'generation',
        'indexName' => 'indexName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

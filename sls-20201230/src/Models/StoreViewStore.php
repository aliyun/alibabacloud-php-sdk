<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class StoreViewStore extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $query;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeName;
    protected $_name = [
        'project'   => 'project',
        'query'     => 'query',
        'storeName' => 'storeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->storeName) {
            $res['storeName'] = $this->storeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StoreViewStore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['storeName'])) {
            $model->storeName = $map['storeName'];
        }

        return $model;
    }
}

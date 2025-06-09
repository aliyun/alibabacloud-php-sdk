<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class StoreViewStore extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $storeName;
    protected $_name = [
        'project' => 'project',
        'query' => 'query',
        'storeName' => 'storeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

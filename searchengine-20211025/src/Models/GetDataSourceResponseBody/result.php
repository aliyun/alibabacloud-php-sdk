<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $indexes;

    /**
     * @var int
     */
    public $lastFulTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'domain' => 'domain',
        'indexes' => 'indexes',
        'lastFulTime' => 'lastFulTime',
        'name' => 'name',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->indexes)) {
            Model::validateArray($this->indexes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->indexes) {
            if (\is_array($this->indexes)) {
                $res['indexes'] = [];
                $n1 = 0;
                foreach ($this->indexes as $item1) {
                    $res['indexes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lastFulTime) {
            $res['lastFulTime'] = $this->lastFulTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['indexes'])) {
            if (!empty($map['indexes'])) {
                $model->indexes = [];
                $n1 = 0;
                foreach ($map['indexes'] as $item1) {
                    $model->indexes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['lastFulTime'])) {
            $model->lastFulTime = $map['lastFulTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListAlertRobotsRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $robotIds;

    /**
     * @var string[]
     */
    public $types;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'name' => 'name',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'robotIds' => 'robotIds',
        'types' => 'types',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->robotIds)) {
            Model::validateArray($this->robotIds);
        }
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->robotIds) {
            if (\is_array($this->robotIds)) {
                $res['robotIds'] = [];
                $n1 = 0;
                foreach ($this->robotIds as $item1) {
                    $res['robotIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['types'] = [];
                $n1 = 0;
                foreach ($this->types as $item1) {
                    $res['types'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['robotIds'])) {
            if (!empty($map['robotIds'])) {
                $model->robotIds = [];
                $n1 = 0;
                foreach ($map['robotIds'] as $item1) {
                    $model->robotIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['types'])) {
            if (!empty($map['types'])) {
                $model->types = [];
                $n1 = 0;
                foreach ($map['types'] as $item1) {
                    $model->types[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}

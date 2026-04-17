<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListContactGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $contactGroupIds;

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
     * @var string
     */
    public $workspace;
    protected $_name = [
        'contactGroupIds' => 'contactGroupIds',
        'name' => 'name',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroupIds)) {
            Model::validateArray($this->contactGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupIds) {
            if (\is_array($this->contactGroupIds)) {
                $res['contactGroupIds'] = [];
                $n1 = 0;
                foreach ($this->contactGroupIds as $item1) {
                    $res['contactGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['contactGroupIds'])) {
            if (!empty($map['contactGroupIds'])) {
                $model->contactGroupIds = [];
                $n1 = 0;
                foreach ($map['contactGroupIds'] as $item1) {
                    $model->contactGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}

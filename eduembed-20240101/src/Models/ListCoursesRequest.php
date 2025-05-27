<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Dara\Model;

class ListCoursesRequest extends Model
{
    /**
     * @var int[]
     */
    public $id;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'id' => 'Id',
        'page' => 'Page',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->id)) {
            Model::validateArray($this->id);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            if (\is_array($this->id)) {
                $res['Id'] = [];
                $n1 = 0;
                foreach ($this->id as $item1) {
                    $res['Id'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Id'])) {
            if (!empty($map['Id'])) {
                $model->id = [];
                $n1 = 0;
                foreach ($map['Id'] as $item1) {
                    $model->id[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

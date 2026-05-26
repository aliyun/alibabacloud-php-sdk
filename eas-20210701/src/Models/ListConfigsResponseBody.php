<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListConfigsResponseBody\configs;

class ListConfigsResponseBody extends Model
{
    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'configs' => 'Configs',
        'hasMore' => 'HasMore',
        'name' => 'Name',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'total' => 'Total',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['Configs'] = [];
                $n1 = 0;
                foreach ($this->configs as $item1) {
                    $res['Configs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n1 = 0;
                foreach ($map['Configs'] as $item1) {
                    $model->configs[$n1] = configs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

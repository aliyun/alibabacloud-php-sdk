<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data;

use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetEnterpriseSupportPlanDetailResponseBody\data\serviceItems\operateList;
use AlibabaCloud\Tea\Model;

class serviceItems extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $name;

    /**
     * @var operateList[]
     */
    public $operateList;
    protected $_name = [
        'content'     => 'content',
        'desc'        => 'desc',
        'name'        => 'name',
        'operateList' => 'operateList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->operateList) {
            $res['operateList'] = [];
            if (null !== $this->operateList && \is_array($this->operateList)) {
                $n = 0;
                foreach ($this->operateList as $item) {
                    $res['operateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['operateList'])) {
            if (!empty($map['operateList'])) {
                $model->operateList = [];
                $n                  = 0;
                foreach ($map['operateList'] as $item) {
                    $model->operateList[$n++] = null !== $item ? operateList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

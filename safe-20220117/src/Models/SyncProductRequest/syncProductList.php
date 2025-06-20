<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SyncProductRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\SyncProductRequest\syncProductList\innerProductList;

class syncProductList extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var innerProductList[]
     */
    public $innerProductList;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'code' => 'Code',
        'innerProductList' => 'InnerProductList',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->innerProductList)) {
            Model::validateArray($this->innerProductList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->innerProductList) {
            if (\is_array($this->innerProductList)) {
                $res['InnerProductList'] = [];
                $n1 = 0;
                foreach ($this->innerProductList as $item1) {
                    $res['InnerProductList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['InnerProductList'])) {
            if (!empty($map['InnerProductList'])) {
                $model->innerProductList = [];
                $n1 = 0;
                foreach ($map['InnerProductList'] as $item1) {
                    $model->innerProductList[$n1] = innerProductList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

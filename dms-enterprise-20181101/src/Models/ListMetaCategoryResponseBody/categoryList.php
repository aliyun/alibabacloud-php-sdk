<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListMetaCategoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\MetaCategory;

class categoryList extends Model
{
    /**
     * @var MetaCategory[]
     */
    public $metaCategory;
    protected $_name = [
        'metaCategory' => 'MetaCategory',
    ];

    public function validate()
    {
        if (\is_array($this->metaCategory)) {
            Model::validateArray($this->metaCategory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metaCategory) {
            if (\is_array($this->metaCategory)) {
                $res['MetaCategory'] = [];
                $n1 = 0;
                foreach ($this->metaCategory as $item1) {
                    $res['MetaCategory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MetaCategory'])) {
            if (!empty($map['MetaCategory'])) {
                $model->metaCategory = [];
                $n1 = 0;
                foreach ($map['MetaCategory'] as $item1) {
                    $model->metaCategory[$n1] = MetaCategory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

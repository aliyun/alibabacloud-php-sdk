<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListPublishedServicesResponseBody\publishedServicesList\listPublishedServices;

use AlibabaCloud\Dara\Model;

class groups extends Model
{
    /**
     * @var string[]
     */
    public $group;
    protected $_name = [
        'group' => 'group',
    ];

    public function validate()
    {
        if (\is_array($this->group)) {
            Model::validateArray($this->group);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->group) {
            if (\is_array($this->group)) {
                $res['group'] = [];
                $n1 = 0;
                foreach ($this->group as $item1) {
                    $res['group'][$n1] = $item1;
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
        if (isset($map['group'])) {
            if (!empty($map['group'])) {
                $model->group = [];
                $n1 = 0;
                foreach ($map['group'] as $item1) {
                    $model->group[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

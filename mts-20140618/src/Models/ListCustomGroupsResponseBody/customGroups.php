<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomGroupsResponseBody\customGroups\customGroup;

class customGroups extends Model
{
    /**
     * @var customGroup[]
     */
    public $customGroup;
    protected $_name = [
        'customGroup' => 'CustomGroup',
    ];

    public function validate()
    {
        if (\is_array($this->customGroup)) {
            Model::validateArray($this->customGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customGroup) {
            if (\is_array($this->customGroup)) {
                $res['CustomGroup'] = [];
                $n1 = 0;
                foreach ($this->customGroup as $item1) {
                    $res['CustomGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomGroup'])) {
            if (!empty($map['CustomGroup'])) {
                $model->customGroup = [];
                $n1 = 0;
                foreach ($map['CustomGroup'] as $item1) {
                    $model->customGroup[$n1] = customGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

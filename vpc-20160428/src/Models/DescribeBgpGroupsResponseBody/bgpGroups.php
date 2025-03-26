<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsResponseBody\bgpGroups\bgpGroup;

class bgpGroups extends Model
{
    /**
     * @var bgpGroup[]
     */
    public $bgpGroup;
    protected $_name = [
        'bgpGroup' => 'BgpGroup',
    ];

    public function validate()
    {
        if (\is_array($this->bgpGroup)) {
            Model::validateArray($this->bgpGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bgpGroup) {
            if (\is_array($this->bgpGroup)) {
                $res['BgpGroup'] = [];
                $n1 = 0;
                foreach ($this->bgpGroup as $item1) {
                    $res['BgpGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BgpGroup'])) {
            if (!empty($map['BgpGroup'])) {
                $model->bgpGroup = [];
                $n1 = 0;
                foreach ($map['BgpGroup'] as $item1) {
                    $model->bgpGroup[$n1++] = bgpGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

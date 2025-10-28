<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponseBody\serviceGroupsList\listServiceGroups;

class serviceGroupsList extends Model
{
    /**
     * @var listServiceGroups[]
     */
    public $listServiceGroups;
    protected $_name = [
        'listServiceGroups' => 'ListServiceGroups',
    ];

    public function validate()
    {
        if (\is_array($this->listServiceGroups)) {
            Model::validateArray($this->listServiceGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listServiceGroups) {
            if (\is_array($this->listServiceGroups)) {
                $res['ListServiceGroups'] = [];
                $n1 = 0;
                foreach ($this->listServiceGroups as $item1) {
                    $res['ListServiceGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ListServiceGroups'])) {
            if (!empty($map['ListServiceGroups'])) {
                $model->listServiceGroups = [];
                $n1 = 0;
                foreach ($map['ListServiceGroups'] as $item1) {
                    $model->listServiceGroups[$n1] = listServiceGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

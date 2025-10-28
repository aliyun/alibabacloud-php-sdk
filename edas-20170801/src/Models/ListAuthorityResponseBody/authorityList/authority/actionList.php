<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList\authority;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList\authority\actionList\action;

class actionList extends Model
{
    /**
     * @var action[]
     */
    public $action;
    protected $_name = [
        'action' => 'Action',
    ];

    public function validate()
    {
        if (\is_array($this->action)) {
            Model::validateArray($this->action);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            if (\is_array($this->action)) {
                $res['Action'] = [];
                $n1 = 0;
                foreach ($this->action as $item1) {
                    $res['Action'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Action'])) {
            if (!empty($map['Action'])) {
                $model->action = [];
                $n1 = 0;
                foreach ($map['Action'] as $item1) {
                    $model->action[$n1] = action::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

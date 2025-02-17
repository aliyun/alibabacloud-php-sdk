<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions\session;

class sessions extends Model
{
    /**
     * @var session[]
     */
    public $session;
    protected $_name = [
        'session' => 'Session',
    ];

    public function validate()
    {
        if (\is_array($this->session)) {
            Model::validateArray($this->session);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->session) {
            if (\is_array($this->session)) {
                $res['Session'] = [];
                $n1             = 0;
                foreach ($this->session as $item1) {
                    $res['Session'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Session'])) {
            if (!empty($map['Session'])) {
                $model->session = [];
                $n1             = 0;
                foreach ($map['Session'] as $item1) {
                    $model->session[$n1++] = session::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

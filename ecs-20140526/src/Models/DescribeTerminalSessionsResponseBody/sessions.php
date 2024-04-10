<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions\session;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->session) {
            $res['Session'] = [];
            if (null !== $this->session && \is_array($this->session)) {
                $n = 0;
                foreach ($this->session as $item) {
                    $res['Session'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Session'])) {
            if (!empty($map['Session'])) {
                $model->session = [];
                $n              = 0;
                foreach ($map['Session'] as $item) {
                    $model->session[$n++] = null !== $item ? session::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

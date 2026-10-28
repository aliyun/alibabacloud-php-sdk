<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListSessionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListSessionsResponseBody\data\sessions;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'nextToken' => 'nextToken',
        'sessions' => 'sessions',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->sessions) {
            if (\is_array($this->sessions)) {
                $res['sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['sessions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['sessions'])) {
            if (!empty($map['sessions'])) {
                $model->sessions = [];
                $n1 = 0;
                foreach ($map['sessions'] as $item1) {
                    $model->sessions[$n1] = sessions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}

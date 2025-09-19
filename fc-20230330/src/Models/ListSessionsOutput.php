<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListSessionsOutput extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var Session[]
     */
    public $sessions;
    protected $_name = [
        'nextToken' => 'nextToken',
        'sessions' => 'sessions',
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
                    $model->sessions[$n1] = Session::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

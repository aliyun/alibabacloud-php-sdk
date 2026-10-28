<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var timeline[]
     */
    public $timeline;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'nextToken' => 'nextToken',
        'sessionId' => 'sessionId',
        'timeline' => 'timeline',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->timeline)) {
            Model::validateArray($this->timeline);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->timeline) {
            if (\is_array($this->timeline)) {
                $res['timeline'] = [];
                $n1 = 0;
                foreach ($this->timeline as $item1) {
                    $res['timeline'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['timeline'])) {
            if (!empty($map['timeline'])) {
                $model->timeline = [];
                $n1 = 0;
                foreach ($map['timeline'] as $item1) {
                    $model->timeline[$n1] = timeline::fromMap($item1);
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

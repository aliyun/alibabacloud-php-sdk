<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731\Models;

use AlibabaCloud\Dara\Model;

class ListSessionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var Session[]
     */
    public $sessions;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'sessions' => 'Sessions',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sessions) {
            if (\is_array($this->sessions)) {
                $res['Sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['Sessions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n1 = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1] = Session::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

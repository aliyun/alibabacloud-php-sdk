<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentPlaybookResponseBody\playbooks;

class DescribeComponentPlaybookResponseBody extends Model
{
    /**
     * @var playbooks[]
     */
    public $playbooks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbooks' => 'Playbooks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->playbooks)) {
            Model::validateArray($this->playbooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playbooks) {
            if (\is_array($this->playbooks)) {
                $res['Playbooks'] = [];
                $n1 = 0;
                foreach ($this->playbooks as $item1) {
                    $res['Playbooks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Playbooks'])) {
            if (!empty($map['Playbooks'])) {
                $model->playbooks = [];
                $n1 = 0;
                foreach ($map['Playbooks'] as $item1) {
                    $model->playbooks[$n1] = playbooks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

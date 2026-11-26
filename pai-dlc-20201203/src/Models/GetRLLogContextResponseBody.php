<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetRLLogContextResponseBody extends Model
{
    /**
     * @var int
     */
    public $anchorIndex;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var RLLogContextLine[]
     */
    public $lines;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $truncated;
    protected $_name = [
        'anchorIndex' => 'AnchorIndex',
        'jobId' => 'JobId',
        'lines' => 'Lines',
        'mode' => 'Mode',
        'requestId' => 'RequestId',
        'truncated' => 'Truncated',
    ];

    public function validate()
    {
        if (\is_array($this->lines)) {
            Model::validateArray($this->lines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchorIndex) {
            $res['AnchorIndex'] = $this->anchorIndex;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->lines) {
            if (\is_array($this->lines)) {
                $res['Lines'] = [];
                $n1 = 0;
                foreach ($this->lines as $item1) {
                    $res['Lines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->truncated) {
            $res['Truncated'] = $this->truncated;
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
        if (isset($map['AnchorIndex'])) {
            $model->anchorIndex = $map['AnchorIndex'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Lines'])) {
            if (!empty($map['Lines'])) {
                $model->lines = [];
                $n1 = 0;
                foreach ($map['Lines'] as $item1) {
                    $model->lines[$n1] = RLLogContextLine::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Truncated'])) {
            $model->truncated = $map['Truncated'];
        }

        return $model;
    }
}

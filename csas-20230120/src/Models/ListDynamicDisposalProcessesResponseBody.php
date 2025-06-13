<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody\disposalProcesses;

class ListDynamicDisposalProcessesResponseBody extends Model
{
    /**
     * @var disposalProcesses[]
     */
    public $disposalProcesses;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'disposalProcesses' => 'DisposalProcesses',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->disposalProcesses)) {
            Model::validateArray($this->disposalProcesses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disposalProcesses) {
            if (\is_array($this->disposalProcesses)) {
                $res['DisposalProcesses'] = [];
                $n1 = 0;
                foreach ($this->disposalProcesses as $item1) {
                    $res['DisposalProcesses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['DisposalProcesses'])) {
            if (!empty($map['DisposalProcesses'])) {
                $model->disposalProcesses = [];
                $n1 = 0;
                foreach ($map['DisposalProcesses'] as $item1) {
                    $model->disposalProcesses[$n1] = disposalProcesses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}

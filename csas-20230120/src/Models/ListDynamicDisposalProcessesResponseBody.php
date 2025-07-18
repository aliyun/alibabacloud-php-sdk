<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody\disposalProcesses;
use AlibabaCloud\Tea\Model;

class ListDynamicDisposalProcessesResponseBody extends Model
{
    /**
     * @description List of disposal processes.
     *
     * @var disposalProcesses[]
     */
    public $disposalProcesses;

    /**
     * @description Request ID.
     *
     * @example BE4FB974-11BC-5453-9BE1-1606A73EACA6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total number of dynamic disposal processes.
     *
     * @example 1
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'disposalProcesses' => 'DisposalProcesses',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->disposalProcesses) {
            $res['DisposalProcesses'] = [];
            if (null !== $this->disposalProcesses && \is_array($this->disposalProcesses)) {
                $n = 0;
                foreach ($this->disposalProcesses as $item) {
                    $res['DisposalProcesses'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListDynamicDisposalProcessesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisposalProcesses'])) {
            if (!empty($map['DisposalProcesses'])) {
                $model->disposalProcesses = [];
                $n = 0;
                foreach ($map['DisposalProcesses'] as $item) {
                    $model->disposalProcesses[$n++] = null !== $item ? disposalProcesses::fromMap($item) : $item;
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

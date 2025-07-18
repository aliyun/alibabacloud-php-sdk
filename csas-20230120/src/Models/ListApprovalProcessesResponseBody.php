<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalProcessesResponseBody\processes;
use AlibabaCloud\Tea\Model;

class ListApprovalProcessesResponseBody extends Model
{
    /**
     * @var processes[]
     */
    public $processes;

    /**
     * @example 7E39C33B-F565-55C6-ACC2-953FCE7DA7D6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalNum;
    protected $_name = [
        'processes' => 'Processes',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->processes) {
            $res['Processes'] = [];
            if (null !== $this->processes && \is_array($this->processes)) {
                $n = 0;
                foreach ($this->processes as $item) {
                    $res['Processes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListApprovalProcessesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Processes'])) {
            if (!empty($map['Processes'])) {
                $model->processes = [];
                $n = 0;
                foreach ($map['Processes'] as $item) {
                    $model->processes[$n++] = null !== $item ? processes::fromMap($item) : $item;
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

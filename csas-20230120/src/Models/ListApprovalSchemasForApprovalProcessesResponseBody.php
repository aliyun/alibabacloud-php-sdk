<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasForApprovalProcessesResponseBody\processes;
use AlibabaCloud\Tea\Model;

class ListApprovalSchemasForApprovalProcessesResponseBody extends Model
{
    /**
     * @var processes[]
     */
    public $processes;

    /**
     * @example 58D6B23E-E5DA-5418-8F61-51A3B5A30049
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'processes' => 'Processes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApprovalSchemasForApprovalProcessesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Processes'])) {
            if (!empty($map['Processes'])) {
                $model->processes = [];
                $n                = 0;
                foreach ($map['Processes'] as $item) {
                    $model->processes[$n++] = null !== $item ? processes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

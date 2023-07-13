<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares;
use AlibabaCloud\Tea\Model;

class ListSoftwaresResponseBody extends Model
{
    /**
     * @description The list of the information about the software installed in the cluster.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE7****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the scheduler. Valid values:
     *
     *   pbs
     *   pbs19
     *   slurm
     *   slurm19
     *   slurm20
     *   opengridscheduler
     *   deadline
     *   gridengine
     *   cube
     *   custom
     *
     * @var softwares
     */
    public $softwares;
    protected $_name = [
        'requestId' => 'RequestId',
        'softwares' => 'Softwares',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->softwares) {
            $res['Softwares'] = null !== $this->softwares ? $this->softwares->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSoftwaresResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Softwares'])) {
            $model->softwares = softwares::fromMap($map['Softwares']);
        }

        return $model;
    }
}

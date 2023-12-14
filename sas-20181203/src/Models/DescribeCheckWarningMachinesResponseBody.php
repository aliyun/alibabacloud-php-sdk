<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningMachinesResponseBody\machines;
use AlibabaCloud\Tea\Model;

class DescribeCheckWarningMachinesResponseBody extends Model
{
    /**
     * @description The number of the servers on which the same risk item is detected.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The servers on which the same risk item is detected.
     *
     * @var machines[]
     */
    public $machines;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example B3D989EB-2E59-584C-8438-5DFAA34A****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'     => 'Count',
        'machines'  => 'Machines',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->machines) {
            $res['Machines'] = [];
            if (null !== $this->machines && \is_array($this->machines)) {
                $n = 0;
                foreach ($this->machines as $item) {
                    $res['Machines'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCheckWarningMachinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Machines'])) {
            if (!empty($map['Machines'])) {
                $model->machines = [];
                $n               = 0;
                foreach ($map['Machines'] as $item) {
                    $model->machines[$n++] = null !== $item ? machines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

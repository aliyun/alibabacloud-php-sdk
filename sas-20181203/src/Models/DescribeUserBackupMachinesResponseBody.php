<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBackupMachinesResponseBody\machines;
use AlibabaCloud\Tea\Model;

class DescribeUserBackupMachinesResponseBody extends Model
{
    /**
     * @var machines[]
     */
    public $machines;

    /**
     * @example D0D6E6E4-CB8C-4897-B852-46AEFDA04B21
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'machines'  => 'Machines',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DescribeUserBackupMachinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBackupMachinesResponseBody\machines;
use AlibabaCloud\Tea\Model;

class DescribeUserBackupMachinesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var machines[]
     */
    public $machines;
    protected $_name = [
        'requestId' => 'RequestId',
        'machines'  => 'Machines',
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
        if (null !== $this->machines) {
            $res['Machines'] = [];
            if (null !== $this->machines && \is_array($this->machines)) {
                $n = 0;
                foreach ($this->machines as $item) {
                    $res['Machines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}

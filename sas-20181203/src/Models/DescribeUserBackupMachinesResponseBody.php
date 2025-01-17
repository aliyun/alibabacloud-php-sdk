<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBackupMachinesResponseBody\machines;

class DescribeUserBackupMachinesResponseBody extends Model
{
    /**
     * @var machines[]
     */
    public $machines;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'machines'  => 'Machines',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->machines)) {
            Model::validateArray($this->machines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machines) {
            if (\is_array($this->machines)) {
                $res['Machines'] = [];
                $n1              = 0;
                foreach ($this->machines as $item1) {
                    $res['Machines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Machines'])) {
            if (!empty($map['Machines'])) {
                $model->machines = [];
                $n1              = 0;
                foreach ($map['Machines'] as $item1) {
                    $model->machines[$n1++] = machines::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Dara\Model;

class suspendedProcesses extends Model
{
    /**
     * @var string[]
     */
    public $suspendedProcess;
    protected $_name = [
        'suspendedProcess' => 'SuspendedProcess',
    ];

    public function validate()
    {
        if (\is_array($this->suspendedProcess)) {
            Model::validateArray($this->suspendedProcess);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->suspendedProcess) {
            if (\is_array($this->suspendedProcess)) {
                $res['SuspendedProcess'] = [];
                $n1 = 0;
                foreach ($this->suspendedProcess as $item1) {
                    $res['SuspendedProcess'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SuspendedProcess'])) {
            if (!empty($map['SuspendedProcess'])) {
                $model->suspendedProcess = [];
                $n1 = 0;
                foreach ($map['SuspendedProcess'] as $item1) {
                    $model->suspendedProcess[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

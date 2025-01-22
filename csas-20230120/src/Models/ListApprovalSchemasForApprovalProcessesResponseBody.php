<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalSchemasForApprovalProcessesResponseBody\processes;

class ListApprovalSchemasForApprovalProcessesResponseBody extends Model
{
    /**
     * @var processes[]
     */
    public $processes;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'processes' => 'Processes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->processes)) {
            Model::validateArray($this->processes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processes) {
            if (\is_array($this->processes)) {
                $res['Processes'] = [];
                $n1               = 0;
                foreach ($this->processes as $item1) {
                    $res['Processes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Processes'])) {
            if (!empty($map['Processes'])) {
                $model->processes = [];
                $n1               = 0;
                foreach ($map['Processes'] as $item1) {
                    $model->processes[$n1++] = processes::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

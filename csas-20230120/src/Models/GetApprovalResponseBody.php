<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalResponseBody\approval;

class GetApprovalResponseBody extends Model
{
    /**
     * @var approval[]
     */
    public $approval;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'approval'  => 'Approval',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->approval)) {
            Model::validateArray($this->approval);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approval) {
            if (\is_array($this->approval)) {
                $res['Approval'] = [];
                $n1              = 0;
                foreach ($this->approval as $item1) {
                    $res['Approval'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Approval'])) {
            if (!empty($map['Approval'])) {
                $model->approval = [];
                $n1              = 0;
                foreach ($map['Approval'] as $item1) {
                    $model->approval[$n1++] = approval::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

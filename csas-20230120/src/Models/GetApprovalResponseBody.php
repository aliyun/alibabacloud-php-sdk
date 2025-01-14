<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalResponseBody\approval;
use AlibabaCloud\Tea\Model;

class GetApprovalResponseBody extends Model
{
    /**
     * @var approval[]
     */
    public $approval;

    /**
     * @example 7E9D7ACD-53D5-56EF-A913-79D148D06299
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'approval'  => 'Approval',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approval) {
            $res['Approval'] = [];
            if (null !== $this->approval && \is_array($this->approval)) {
                $n = 0;
                foreach ($this->approval as $item) {
                    $res['Approval'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetApprovalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Approval'])) {
            if (!empty($map['Approval'])) {
                $model->approval = [];
                $n               = 0;
                foreach ($map['Approval'] as $item) {
                    $model->approval[$n++] = null !== $item ? approval::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

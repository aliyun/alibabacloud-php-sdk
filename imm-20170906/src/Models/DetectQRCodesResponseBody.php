<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesResponseBody\failDetails;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesResponseBody\successDetails;
use AlibabaCloud\Tea\Model;

class DetectQRCodesResponseBody extends Model
{
    /**
     * @var successDetails[]
     */
    public $successDetails;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var failDetails[]
     */
    public $failDetails;
    protected $_name = [
        'successDetails' => 'SuccessDetails',
        'requestId'      => 'RequestId',
        'failDetails'    => 'FailDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->successDetails) {
            $res['SuccessDetails'] = [];
            if (null !== $this->successDetails && \is_array($this->successDetails)) {
                $n = 0;
                foreach ($this->successDetails as $item) {
                    $res['SuccessDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->failDetails) {
            $res['FailDetails'] = [];
            if (null !== $this->failDetails && \is_array($this->failDetails)) {
                $n = 0;
                foreach ($this->failDetails as $item) {
                    $res['FailDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectQRCodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuccessDetails'])) {
            if (!empty($map['SuccessDetails'])) {
                $model->successDetails = [];
                $n                     = 0;
                foreach ($map['SuccessDetails'] as $item) {
                    $model->successDetails[$n++] = null !== $item ? successDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FailDetails'])) {
            if (!empty($map['FailDetails'])) {
                $model->failDetails = [];
                $n                  = 0;
                foreach ($map['FailDetails'] as $item) {
                    $model->failDetails[$n++] = null !== $item ? failDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

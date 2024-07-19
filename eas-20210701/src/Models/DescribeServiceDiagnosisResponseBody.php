<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceDiagnosisResponseBody\diagnosisList;
use AlibabaCloud\Tea\Model;

class DescribeServiceDiagnosisResponseBody extends Model
{
    /**
     * @description The diagnostics list.
     *
     * @var diagnosisList[]
     */
    public $diagnosisList;

    /**
     * @description The request ID.
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnosisList' => 'DiagnosisList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosisList) {
            $res['DiagnosisList'] = [];
            if (null !== $this->diagnosisList && \is_array($this->diagnosisList)) {
                $n = 0;
                foreach ($this->diagnosisList as $item) {
                    $res['DiagnosisList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeServiceDiagnosisResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnosisList'])) {
            if (!empty($map['DiagnosisList'])) {
                $model->diagnosisList = [];
                $n                    = 0;
                foreach ($map['DiagnosisList'] as $item) {
                    $model->diagnosisList[$n++] = null !== $item ? diagnosisList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

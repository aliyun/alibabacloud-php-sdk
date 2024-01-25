<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models;

use AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeHuYaTranscodeByDomainResponseBody\resultDesc;
use AlibabaCloud\Tea\Model;

class DescribeHuYaTranscodeByDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var resultDesc[]
     */
    public $resultDesc;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'requestId'  => 'RequestId',
        'result'     => 'Result',
        'resultDesc' => 'ResultDesc',
        'status'     => 'Status',
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
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->resultDesc) {
            $res['ResultDesc'] = [];
            if (null !== $this->resultDesc && \is_array($this->resultDesc)) {
                $n = 0;
                foreach ($this->resultDesc as $item) {
                    $res['ResultDesc'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHuYaTranscodeByDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ResultDesc'])) {
            if (!empty($map['ResultDesc'])) {
                $model->resultDesc = [];
                $n                 = 0;
                foreach ($map['ResultDesc'] as $item) {
                    $model->resultDesc[$n++] = null !== $item ? resultDesc::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

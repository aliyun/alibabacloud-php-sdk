<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701\Models;

use AlibabaCloud\Tea\Model;

class GetPredictDocResponseBody extends Model
{
    /**
     * @example 86D18195-D89C-4C8C-9DC4-5FCE789CE6D5
     *
     * @var string
     */
    public $requestId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $resultContent;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @example xxx
     *
     * @var string
     */
    public $XLIFFInfo;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resultContent' => 'ResultContent',
        'status'        => 'Status',
        'XLIFFInfo'     => 'XLIFFInfo',
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
        if (null !== $this->resultContent) {
            $res['ResultContent'] = $this->resultContent;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->XLIFFInfo) {
            $res['XLIFFInfo'] = $this->XLIFFInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPredictDocResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultContent'])) {
            $model->resultContent = $map['ResultContent'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['XLIFFInfo'])) {
            $model->XLIFFInfo = $map['XLIFFInfo'];
        }

        return $model;
    }
}

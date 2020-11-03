<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701\Models;

use AlibabaCloud\Tea\Model;

class GetPredictDocResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultContent;

    /**
     * @var int
     */
    public $status;

    /**
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
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('resultContent', $this->resultContent, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('XLIFFInfo', $this->XLIFFInfo, true);
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
     * @return GetPredictDocResponse
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ExportBillDetailDataResponseBody extends Model
{
    /**
     * @description The download path of the exported file.
     *
     * @example http://test-oss.com/image_01.jpeg
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The ID of the request. This parameter is a common parameter. Each request has a unique ID. You can use the ID to troubleshoot issues.
     *
     * @example BEA05990-B90D-594F-8C8E-650AEEB94C5D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'filePath'  => 'FilePath',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportBillDetailDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

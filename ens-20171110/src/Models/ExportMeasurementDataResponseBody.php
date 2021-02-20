<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ExportMeasurementDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $filePath;

    /**
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
     * @return ExportMeasurementDataResponseBody
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

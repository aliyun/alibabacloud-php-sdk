<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ExportMeasurementDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $filePath;
    protected $_name = [
        'requestId' => 'RequestId',
        'filePath'  => 'FilePath',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('filePath', $this->filePath, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportMeasurementDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        return $model;
    }
}

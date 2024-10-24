<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class GetDatasetVersionResponseBody extends Model
{
    /**
     * @var DatasetVersion
     */
    public $datasetVersion;

    /**
     * @example ADF6D849-*****-7E7030F0CE53
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasetVersion' => 'DatasetVersion',
        'requestId'      => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = null !== $this->datasetVersion ? $this->datasetVersion->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatasetVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = DatasetVersion::fromMap($map['DatasetVersion']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

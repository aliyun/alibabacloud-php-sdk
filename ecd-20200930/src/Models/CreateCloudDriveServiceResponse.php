<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudDriveServiceResponse extends Model
{
    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $cdsName;

    /**
     * @var string
     */
    public $maxSize;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cdsId'     => 'CdsId',
        'cdsName'   => 'CdsName',
        'maxSize'   => 'MaxSize',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('cdsId', $this->cdsId, true);
        Model::validateRequired('cdsName', $this->cdsName, true);
        Model::validateRequired('maxSize', $this->maxSize, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->cdsName) {
            $res['CdsName'] = $this->cdsName;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudDriveServiceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['CdsName'])) {
            $model->cdsName = $map['CdsName'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

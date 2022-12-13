<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class CreateTensorboardResponseBody extends Model
{
    /**
     * @description DataSourceId
     *
     * @example ds-20210126170216-xxxxxxxx
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example dlc-20210126170216-xxxxxxxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Tensorboard id
     *
     * @example tbxxxxxxxx
     *
     * @var string
     */
    public $tensorboardId;
    protected $_name = [
        'dataSourceId'  => 'DataSourceId',
        'jobId'         => 'JobId',
        'requestId'     => 'RequestId',
        'tensorboardId' => 'TensorboardId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tensorboardId) {
            $res['TensorboardId'] = $this->tensorboardId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTensorboardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TensorboardId'])) {
            $model->tensorboardId = $map['TensorboardId'];
        }

        return $model;
    }
}

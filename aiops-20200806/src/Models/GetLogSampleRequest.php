<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetLogSampleRequest extends Model
{
    /**
     * @var string
     */
    public $appField;

    /**
     * @var string
     */
    public $appValue;

    /**
     * @var int
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $logField;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'appField'     => 'AppField',
        'appValue'     => 'AppValue',
        'dataSourceId' => 'DataSourceId',
        'logField'     => 'LogField',
        'operaUid'     => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appField) {
            $res['AppField'] = $this->appField;
        }
        if (null !== $this->appValue) {
            $res['AppValue'] = $this->appValue;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->logField) {
            $res['LogField'] = $this->logField;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogSampleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppField'])) {
            $model->appField = $map['AppField'];
        }
        if (isset($map['AppValue'])) {
            $model->appValue = $map['AppValue'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['LogField'])) {
            $model->logField = $map['LogField'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}

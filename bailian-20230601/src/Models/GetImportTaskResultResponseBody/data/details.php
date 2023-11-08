<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\GetImportTaskResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $dataName;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'dataId'   => 'DataId',
        'dataName' => 'DataName',
        'errorMsg' => 'ErrorMsg',
        'success'  => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->dataName) {
            $res['DataName'] = $this->dataName;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['DataName'])) {
            $model->dataName = $map['DataName'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

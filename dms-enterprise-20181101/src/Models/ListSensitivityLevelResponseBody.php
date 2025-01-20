<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitivityLevelResponseBody\sensitivityLevelList;

class ListSensitivityLevelResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var sensitivityLevelList[]
     */
    public $sensitivityLevelList;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'            => 'ErrorCode',
        'errorMessage'         => 'ErrorMessage',
        'requestId'            => 'RequestId',
        'sensitivityLevelList' => 'SensitivityLevelList',
        'success'              => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->sensitivityLevelList)) {
            Model::validateArray($this->sensitivityLevelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sensitivityLevelList) {
            if (\is_array($this->sensitivityLevelList)) {
                $res['SensitivityLevelList'] = [];
                $n1                          = 0;
                foreach ($this->sensitivityLevelList as $item1) {
                    $res['SensitivityLevelList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SensitivityLevelList'])) {
            if (!empty($map['SensitivityLevelList'])) {
                $model->sensitivityLevelList = [];
                $n1                          = 0;
                foreach ($map['SensitivityLevelList'] as $item1) {
                    $model->sensitivityLevelList[$n1++] = sensitivityLevelList::fromMap($item1);
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

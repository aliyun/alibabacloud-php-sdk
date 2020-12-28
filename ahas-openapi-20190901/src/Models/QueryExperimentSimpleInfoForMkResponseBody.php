<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentSimpleInfoForMkResponseBody\attack;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentSimpleInfoForMkResponseBody\basicInfo;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentSimpleInfoForMkResponseBody\check;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentSimpleInfoForMkResponseBody\prepare;
use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\QueryExperimentSimpleInfoForMkResponseBody\recover;
use AlibabaCloud\Tea\Model;

class QueryExperimentSimpleInfoForMkResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var check[]
     */
    public $check;

    /**
     * @var prepare[]
     */
    public $prepare;

    /**
     * @var basicInfo
     */
    public $basicInfo;

    /**
     * @var attack[]
     */
    public $attack;

    /**
     * @var recover[]
     */
    public $recover;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'httpStatusCode' => 'HttpStatusCode',
        'check'          => 'Check',
        'prepare'        => 'Prepare',
        'basicInfo'      => 'BasicInfo',
        'attack'         => 'Attack',
        'recover'        => 'Recover',
        'code'           => 'Code',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->check) {
            $res['Check'] = [];
            if (null !== $this->check && \is_array($this->check)) {
                $n = 0;
                foreach ($this->check as $item) {
                    $res['Check'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->prepare) {
            $res['Prepare'] = [];
            if (null !== $this->prepare && \is_array($this->prepare)) {
                $n = 0;
                foreach ($this->prepare as $item) {
                    $res['Prepare'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->basicInfo) {
            $res['BasicInfo'] = null !== $this->basicInfo ? $this->basicInfo->toMap() : null;
        }
        if (null !== $this->attack) {
            $res['Attack'] = [];
            if (null !== $this->attack && \is_array($this->attack)) {
                $n = 0;
                foreach ($this->attack as $item) {
                    $res['Attack'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recover) {
            $res['Recover'] = [];
            if (null !== $this->recover && \is_array($this->recover)) {
                $n = 0;
                foreach ($this->recover as $item) {
                    $res['Recover'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryExperimentSimpleInfoForMkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Check'])) {
            if (!empty($map['Check'])) {
                $model->check = [];
                $n            = 0;
                foreach ($map['Check'] as $item) {
                    $model->check[$n++] = null !== $item ? check::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Prepare'])) {
            if (!empty($map['Prepare'])) {
                $model->prepare = [];
                $n              = 0;
                foreach ($map['Prepare'] as $item) {
                    $model->prepare[$n++] = null !== $item ? prepare::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BasicInfo'])) {
            $model->basicInfo = basicInfo::fromMap($map['BasicInfo']);
        }
        if (isset($map['Attack'])) {
            if (!empty($map['Attack'])) {
                $model->attack = [];
                $n             = 0;
                foreach ($map['Attack'] as $item) {
                    $model->attack[$n++] = null !== $item ? attack::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Recover'])) {
            if (!empty($map['Recover'])) {
                $model->recover = [];
                $n              = 0;
                foreach ($map['Recover'] as $item) {
                    $model->recover[$n++] = null !== $item ? recover::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

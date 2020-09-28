<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidDataProcessResponse\pidDataProcessList;
use AlibabaCloud\Tea\Model;

class ListPidDataProcessResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var pidDataProcessList[]
     */
    public $pidDataProcessList;
    protected $_name = [
        'requestId'          => 'RequestId',
        'message'            => 'Message',
        'code'               => 'Code',
        'success'            => 'Success',
        'pidDataProcessList' => 'PidDataProcessList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('pidDataProcessList', $this->pidDataProcessList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->pidDataProcessList) {
            $res['PidDataProcessList'] = [];
            if (null !== $this->pidDataProcessList && \is_array($this->pidDataProcessList)) {
                $n = 0;
                foreach ($this->pidDataProcessList as $item) {
                    $res['PidDataProcessList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPidDataProcessResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['PidDataProcessList'])) {
            if (!empty($map['PidDataProcessList'])) {
                $model->pidDataProcessList = [];
                $n                         = 0;
                foreach ($map['PidDataProcessList'] as $item) {
                    $model->pidDataProcessList[$n++] = null !== $item ? pidDataProcessList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

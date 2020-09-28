<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListIdentModelsResponse\pidIdentModelList;
use AlibabaCloud\Tea\Model;

class ListIdentModelsResponse extends Model
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
     * @var pidIdentModelList[]
     */
    public $pidIdentModelList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'message'           => 'Message',
        'code'              => 'Code',
        'success'           => 'Success',
        'pidIdentModelList' => 'PidIdentModelList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('pidIdentModelList', $this->pidIdentModelList, true);
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
        if (null !== $this->pidIdentModelList) {
            $res['PidIdentModelList'] = [];
            if (null !== $this->pidIdentModelList && \is_array($this->pidIdentModelList)) {
                $n = 0;
                foreach ($this->pidIdentModelList as $item) {
                    $res['PidIdentModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIdentModelsResponse
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
        if (isset($map['PidIdentModelList'])) {
            if (!empty($map['PidIdentModelList'])) {
                $model->pidIdentModelList = [];
                $n                        = 0;
                foreach ($map['PidIdentModelList'] as $item) {
                    $model->pidIdentModelList[$n++] = null !== $item ? pidIdentModelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

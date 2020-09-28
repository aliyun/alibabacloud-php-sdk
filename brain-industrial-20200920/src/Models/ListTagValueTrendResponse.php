<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListTagValueTrendResponse\pidTagTrendList;
use AlibabaCloud\Tea\Model;

class ListTagValueTrendResponse extends Model
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
     * @var pidTagTrendList[]
     */
    public $pidTagTrendList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'message'         => 'Message',
        'code'            => 'Code',
        'success'         => 'Success',
        'pidTagTrendList' => 'PidTagTrendList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('pidTagTrendList', $this->pidTagTrendList, true);
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
        if (null !== $this->pidTagTrendList) {
            $res['PidTagTrendList'] = [];
            if (null !== $this->pidTagTrendList && \is_array($this->pidTagTrendList)) {
                $n = 0;
                foreach ($this->pidTagTrendList as $item) {
                    $res['PidTagTrendList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagValueTrendResponse
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
        if (isset($map['PidTagTrendList'])) {
            if (!empty($map['PidTagTrendList'])) {
                $model->pidTagTrendList = [];
                $n                      = 0;
                foreach ($map['PidTagTrendList'] as $item) {
                    $model->pidTagTrendList[$n++] = null !== $item ? pidTagTrendList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

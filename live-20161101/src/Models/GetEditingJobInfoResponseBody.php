<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class GetEditingJobInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $editingTasksInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'casterId' => 'CasterId',
        'editingTasksInfo' => 'EditingTasksInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->editingTasksInfo) {
            $res['EditingTasksInfo'] = $this->editingTasksInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['EditingTasksInfo'])) {
            $model->editingTasksInfo = $map['EditingTasksInfo'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\StartOfflineTaskResponseBody\result;

use AlibabaCloud\Dara\Model;

class status extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $deleteTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'createTime',
        'deleteTime' => 'deleteTime',
        'errorMessage' => 'errorMessage',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->deleteTime) {
            $res['deleteTime'] = $this->deleteTime;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['deleteTime'])) {
            $model->deleteTime = $map['deleteTime'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

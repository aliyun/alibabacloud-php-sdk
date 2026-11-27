<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteRumSymbolFilesResponseBody extends Model
{
    /**
     * @var int
     */
    public $deletedObjectCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $requestedFileCount;

    /**
     * @var int
     */
    public $requestedObjectCount;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'deletedObjectCount' => 'deletedObjectCount',
        'requestId' => 'requestId',
        'requestedFileCount' => 'requestedFileCount',
        'requestedObjectCount' => 'requestedObjectCount',
        'success' => 'success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletedObjectCount) {
            $res['deletedObjectCount'] = $this->deletedObjectCount;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->requestedFileCount) {
            $res['requestedFileCount'] = $this->requestedFileCount;
        }

        if (null !== $this->requestedObjectCount) {
            $res['requestedObjectCount'] = $this->requestedObjectCount;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['deletedObjectCount'])) {
            $model->deletedObjectCount = $map['deletedObjectCount'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['requestedFileCount'])) {
            $model->requestedFileCount = $map['requestedFileCount'];
        }

        if (isset($map['requestedObjectCount'])) {
            $model->requestedObjectCount = $map['requestedObjectCount'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}

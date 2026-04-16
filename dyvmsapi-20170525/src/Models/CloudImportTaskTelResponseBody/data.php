<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudImportTaskTelResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $importTotal;

    /**
     * @var string
     */
    public $invalidTotal;

    /**
     * @var string
     */
    public $successTotal;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'fileId' => 'FileId',
        'importTotal' => 'ImportTotal',
        'invalidTotal' => 'InvalidTotal',
        'successTotal' => 'SuccessTotal',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->importTotal) {
            $res['ImportTotal'] = $this->importTotal;
        }

        if (null !== $this->invalidTotal) {
            $res['InvalidTotal'] = $this->invalidTotal;
        }

        if (null !== $this->successTotal) {
            $res['SuccessTotal'] = $this->successTotal;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['ImportTotal'])) {
            $model->importTotal = $map['ImportTotal'];
        }

        if (isset($map['InvalidTotal'])) {
            $model->invalidTotal = $map['InvalidTotal'];
        }

        if (isset($map['SuccessTotal'])) {
            $model->successTotal = $map['SuccessTotal'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

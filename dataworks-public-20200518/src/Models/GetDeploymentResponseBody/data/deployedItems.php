<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponseBody\data;

use AlibabaCloud\Dara\Model;

class deployedItems extends Model
{
    /**
     * @var int
     */
    public $fileId;

    /**
     * @var int
     */
    public $fileVersion;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'fileId' => 'FileId',
        'fileVersion' => 'FileVersion',
        'status' => 'Status',
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

        if (null !== $this->fileVersion) {
            $res['FileVersion'] = $this->fileVersion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['FileVersion'])) {
            $model->fileVersion = $map['FileVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

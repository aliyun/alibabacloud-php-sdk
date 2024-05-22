<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveRecordFilesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $recordIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $removeFile;
    protected $_name = [
        'recordIds'  => 'RecordIds',
        'removeFile' => 'RemoveFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordIds) {
            $res['RecordIds'] = $this->recordIds;
        }
        if (null !== $this->removeFile) {
            $res['RemoveFile'] = $this->removeFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveRecordFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordIds'])) {
            if (!empty($map['RecordIds'])) {
                $model->recordIds = $map['RecordIds'];
            }
        }
        if (isset($map['RemoveFile'])) {
            $model->removeFile = $map['RemoveFile'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteLiveRecordFilesRequest extends Model
{
    /**
     * @var string[]
     */
    public $recordIds;
    /**
     * @var bool
     */
    public $removeFile;
    protected $_name = [
        'recordIds'  => 'RecordIds',
        'removeFile' => 'RemoveFile',
    ];

    public function validate()
    {
        if (\is_array($this->recordIds)) {
            Model::validateArray($this->recordIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordIds) {
            if (\is_array($this->recordIds)) {
                $res['RecordIds'] = [];
                $n1               = 0;
                foreach ($this->recordIds as $item1) {
                    $res['RecordIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->removeFile) {
            $res['RemoveFile'] = $this->removeFile;
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
        if (isset($map['RecordIds'])) {
            if (!empty($map['RecordIds'])) {
                $model->recordIds = [];
                $n1               = 0;
                foreach ($map['RecordIds'] as $item1) {
                    $model->recordIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RemoveFile'])) {
            $model->removeFile = $map['RemoveFile'];
        }

        return $model;
    }
}

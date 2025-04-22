<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class FileDeleteUserTagsRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string[]
     */
    public $keyList;
    protected $_name = [
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'keyList' => 'key_list',
    ];

    public function validate()
    {
        if (\is_array($this->keyList)) {
            Model::validateArray($this->keyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->keyList) {
            if (\is_array($this->keyList)) {
                $res['key_list'] = [];
                $n1 = 0;
                foreach ($this->keyList as $item1) {
                    $res['key_list'][$n1++] = $item1;
                }
            }
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
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['key_list'])) {
            if (!empty($map['key_list'])) {
                $model->keyList = [];
                $n1 = 0;
                foreach ($map['key_list'] as $item1) {
                    $model->keyList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

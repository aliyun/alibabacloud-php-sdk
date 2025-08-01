<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAvailableAuditNotesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 23333
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @example Default
     *
     * @var string
     */
    public $noteId;

    /**
     * @example 错题本2025-07-07_解析结果
     *
     * @var string
     */
    public $noteName;

    /**
     * @example 2025-07-07 11:56:30
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'fileSize' => 'FileSize',
        'id' => 'Id',
        'noteId' => 'NoteId',
        'noteName' => 'NoteName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }
        if (null !== $this->noteName) {
            $res['NoteName'] = $this->noteName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }
        if (isset($map['NoteName'])) {
            $model->noteName = $map['NoteName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

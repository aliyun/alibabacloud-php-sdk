<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestChangeTreeResponseBody\result;

use AlibabaCloud\Dara\Model;

class changedFilesInfos extends Model
{
    /**
     * @var int
     */
    public $addLines;

    /**
     * @var bool
     */
    public $binaryFile;

    /**
     * @var int
     */
    public $delLines;

    /**
     * @var bool
     */
    public $deletedFile;

    /**
     * @var bool
     */
    public $newFile;

    /**
     * @var string
     */
    public $newPath;

    /**
     * @var string
     */
    public $oldPath;

    /**
     * @var bool
     */
    public $renamedFile;
    protected $_name = [
        'addLines' => 'addLines',
        'binaryFile' => 'binaryFile',
        'delLines' => 'delLines',
        'deletedFile' => 'deletedFile',
        'newFile' => 'newFile',
        'newPath' => 'newPath',
        'oldPath' => 'oldPath',
        'renamedFile' => 'renamedFile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addLines) {
            $res['addLines'] = $this->addLines;
        }

        if (null !== $this->binaryFile) {
            $res['binaryFile'] = $this->binaryFile;
        }

        if (null !== $this->delLines) {
            $res['delLines'] = $this->delLines;
        }

        if (null !== $this->deletedFile) {
            $res['deletedFile'] = $this->deletedFile;
        }

        if (null !== $this->newFile) {
            $res['newFile'] = $this->newFile;
        }

        if (null !== $this->newPath) {
            $res['newPath'] = $this->newPath;
        }

        if (null !== $this->oldPath) {
            $res['oldPath'] = $this->oldPath;
        }

        if (null !== $this->renamedFile) {
            $res['renamedFile'] = $this->renamedFile;
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
        if (isset($map['addLines'])) {
            $model->addLines = $map['addLines'];
        }

        if (isset($map['binaryFile'])) {
            $model->binaryFile = $map['binaryFile'];
        }

        if (isset($map['delLines'])) {
            $model->delLines = $map['delLines'];
        }

        if (isset($map['deletedFile'])) {
            $model->deletedFile = $map['deletedFile'];
        }

        if (isset($map['newFile'])) {
            $model->newFile = $map['newFile'];
        }

        if (isset($map['newPath'])) {
            $model->newPath = $map['newPath'];
        }

        if (isset($map['oldPath'])) {
            $model->oldPath = $map['oldPath'];
        }

        if (isset($map['renamedFile'])) {
            $model->renamedFile = $map['renamedFile'];
        }

        return $model;
    }
}

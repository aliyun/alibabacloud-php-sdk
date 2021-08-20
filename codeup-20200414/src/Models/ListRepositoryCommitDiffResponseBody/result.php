<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryCommitDiffResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $deletedFile;

    /**
     * @var string
     */
    public $diff;

    /**
     * @var string
     */
    public $oldPath;

    /**
     * @var string
     */
    public $oldId;

    /**
     * @var string
     */
    public $BMode;

    /**
     * @var bool
     */
    public $isOldLfs;

    /**
     * @var bool
     */
    public $isNewLfs;

    /**
     * @var bool
     */
    public $renamedFile;

    /**
     * @var bool
     */
    public $newFile;

    /**
     * @var string
     */
    public $newId;

    /**
     * @var bool
     */
    public $isBinary;

    /**
     * @var string
     */
    public $newPath;

    /**
     * @var string
     */
    public $AMode;
    protected $_name = [
        'deletedFile' => 'DeletedFile',
        'diff'        => 'Diff',
        'oldPath'     => 'OldPath',
        'oldId'       => 'OldId',
        'BMode'       => 'BMode',
        'isOldLfs'    => 'IsOldLfs',
        'isNewLfs'    => 'IsNewLfs',
        'renamedFile' => 'RenamedFile',
        'newFile'     => 'NewFile',
        'newId'       => 'NewId',
        'isBinary'    => 'IsBinary',
        'newPath'     => 'NewPath',
        'AMode'       => 'AMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletedFile) {
            $res['DeletedFile'] = $this->deletedFile;
        }
        if (null !== $this->diff) {
            $res['Diff'] = $this->diff;
        }
        if (null !== $this->oldPath) {
            $res['OldPath'] = $this->oldPath;
        }
        if (null !== $this->oldId) {
            $res['OldId'] = $this->oldId;
        }
        if (null !== $this->BMode) {
            $res['BMode'] = $this->BMode;
        }
        if (null !== $this->isOldLfs) {
            $res['IsOldLfs'] = $this->isOldLfs;
        }
        if (null !== $this->isNewLfs) {
            $res['IsNewLfs'] = $this->isNewLfs;
        }
        if (null !== $this->renamedFile) {
            $res['RenamedFile'] = $this->renamedFile;
        }
        if (null !== $this->newFile) {
            $res['NewFile'] = $this->newFile;
        }
        if (null !== $this->newId) {
            $res['NewId'] = $this->newId;
        }
        if (null !== $this->isBinary) {
            $res['IsBinary'] = $this->isBinary;
        }
        if (null !== $this->newPath) {
            $res['NewPath'] = $this->newPath;
        }
        if (null !== $this->AMode) {
            $res['AMode'] = $this->AMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletedFile'])) {
            $model->deletedFile = $map['DeletedFile'];
        }
        if (isset($map['Diff'])) {
            $model->diff = $map['Diff'];
        }
        if (isset($map['OldPath'])) {
            $model->oldPath = $map['OldPath'];
        }
        if (isset($map['OldId'])) {
            $model->oldId = $map['OldId'];
        }
        if (isset($map['BMode'])) {
            $model->BMode = $map['BMode'];
        }
        if (isset($map['IsOldLfs'])) {
            $model->isOldLfs = $map['IsOldLfs'];
        }
        if (isset($map['IsNewLfs'])) {
            $model->isNewLfs = $map['IsNewLfs'];
        }
        if (isset($map['RenamedFile'])) {
            $model->renamedFile = $map['RenamedFile'];
        }
        if (isset($map['NewFile'])) {
            $model->newFile = $map['NewFile'];
        }
        if (isset($map['NewId'])) {
            $model->newId = $map['NewId'];
        }
        if (isset($map['IsBinary'])) {
            $model->isBinary = $map['IsBinary'];
        }
        if (isset($map['NewPath'])) {
            $model->newPath = $map['NewPath'];
        }
        if (isset($map['AMode'])) {
            $model->AMode = $map['AMode'];
        }

        return $model;
    }
}

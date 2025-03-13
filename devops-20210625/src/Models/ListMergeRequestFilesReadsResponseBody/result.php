<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestFilesReadsResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestFilesReadsResponseBody\result\readUsers;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $deletedFile;

    /**
     * @example true
     *
     * @var bool
     */
    public $newFile;

    /**
     * @example text.txt
     *
     * @var string
     */
    public $newFilePath;

    /**
     * @example text.txt
     *
     * @var string
     */
    public $oldFilePath;

    /**
     * @var readUsers[]
     */
    public $readUsers;

    /**
     * @example false
     *
     * @var string
     */
    public $renamedFile;
    protected $_name = [
        'deletedFile' => 'deletedFile',
        'newFile'     => 'newFile',
        'newFilePath' => 'newFilePath',
        'oldFilePath' => 'oldFilePath',
        'readUsers'   => 'readUsers',
        'renamedFile' => 'renamedFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletedFile) {
            $res['deletedFile'] = $this->deletedFile;
        }
        if (null !== $this->newFile) {
            $res['newFile'] = $this->newFile;
        }
        if (null !== $this->newFilePath) {
            $res['newFilePath'] = $this->newFilePath;
        }
        if (null !== $this->oldFilePath) {
            $res['oldFilePath'] = $this->oldFilePath;
        }
        if (null !== $this->readUsers) {
            $res['readUsers'] = [];
            if (null !== $this->readUsers && \is_array($this->readUsers)) {
                $n = 0;
                foreach ($this->readUsers as $item) {
                    $res['readUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->renamedFile) {
            $res['renamedFile'] = $this->renamedFile;
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
        if (isset($map['deletedFile'])) {
            $model->deletedFile = $map['deletedFile'];
        }
        if (isset($map['newFile'])) {
            $model->newFile = $map['newFile'];
        }
        if (isset($map['newFilePath'])) {
            $model->newFilePath = $map['newFilePath'];
        }
        if (isset($map['oldFilePath'])) {
            $model->oldFilePath = $map['oldFilePath'];
        }
        if (isset($map['readUsers'])) {
            if (!empty($map['readUsers'])) {
                $model->readUsers = [];
                $n                = 0;
                foreach ($map['readUsers'] as $item) {
                    $model->readUsers[$n++] = null !== $item ? readUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['renamedFile'])) {
            $model->renamedFile = $map['renamedFile'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestFilesReadsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestFilesReadsResponseBody\result\readUsers;

class result extends Model
{
    /**
     * @var string
     */
    public $deletedFile;
    /**
     * @var bool
     */
    public $newFile;
    /**
     * @var string
     */
    public $newFilePath;
    /**
     * @var string
     */
    public $oldFilePath;
    /**
     * @var readUsers[]
     */
    public $readUsers;
    /**
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
        if (\is_array($this->readUsers)) {
            Model::validateArray($this->readUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->readUsers)) {
                $res['readUsers'] = [];
                $n1               = 0;
                foreach ($this->readUsers as $item1) {
                    $res['readUsers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1               = 0;
                foreach ($map['readUsers'] as $item1) {
                    $model->readUsers[$n1++] = readUsers::fromMap($item1);
                }
            }
        }

        if (isset($map['renamedFile'])) {
            $model->renamedFile = $map['renamedFile'];
        }

        return $model;
    }
}

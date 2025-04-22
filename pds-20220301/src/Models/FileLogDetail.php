<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class FileLogDetail extends Model
{
    /**
     * @var string[]
     */
    public $decompressFileList;

    /**
     * @var string
     */
    public $newName;

    /**
     * @var string
     */
    public $parentPath;

    /**
     * @var int
     */
    public $revVersion;

    /**
     * @var string
     */
    public $revisionId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $toParentPath;

    /**
     * @var string
     */
    public $toParentPathType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'decompressFileList' => 'decompress_file_list',
        'newName' => 'new_name',
        'parentPath' => 'parent_path',
        'revVersion' => 'rev_version',
        'revisionId' => 'revision_id',
        'size' => 'size',
        'toParentPath' => 'to_parent_path',
        'toParentPathType' => 'to_parent_path_type',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->decompressFileList)) {
            Model::validateArray($this->decompressFileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->decompressFileList) {
            if (\is_array($this->decompressFileList)) {
                $res['decompress_file_list'] = [];
                $n1 = 0;
                foreach ($this->decompressFileList as $item1) {
                    $res['decompress_file_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->newName) {
            $res['new_name'] = $this->newName;
        }

        if (null !== $this->parentPath) {
            $res['parent_path'] = $this->parentPath;
        }

        if (null !== $this->revVersion) {
            $res['rev_version'] = $this->revVersion;
        }

        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->toParentPath) {
            $res['to_parent_path'] = $this->toParentPath;
        }

        if (null !== $this->toParentPathType) {
            $res['to_parent_path_type'] = $this->toParentPathType;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['decompress_file_list'])) {
            if (!empty($map['decompress_file_list'])) {
                $model->decompressFileList = [];
                $n1 = 0;
                foreach ($map['decompress_file_list'] as $item1) {
                    $model->decompressFileList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['new_name'])) {
            $model->newName = $map['new_name'];
        }

        if (isset($map['parent_path'])) {
            $model->parentPath = $map['parent_path'];
        }

        if (isset($map['rev_version'])) {
            $model->revVersion = $map['rev_version'];
        }

        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['to_parent_path'])) {
            $model->toParentPath = $map['to_parent_path'];
        }

        if (isset($map['to_parent_path_type'])) {
            $model->toParentPathType = $map['to_parent_path_type'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

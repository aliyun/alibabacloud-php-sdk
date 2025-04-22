<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class UpdateFileRequest extends Model
{
    /**
     * @var string
     */
    public $checkNameMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var bool
     */
    public $hidden;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $localModifiedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $starred;
    protected $_name = [
        'checkNameMode' => 'check_name_mode',
        'description' => 'description',
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'hidden' => 'hidden',
        'labels' => 'labels',
        'localModifiedAt' => 'local_modified_at',
        'name' => 'name',
        'starred' => 'starred',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkNameMode) {
            $res['check_name_mode'] = $this->checkNameMode;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->hidden) {
            $res['hidden'] = $this->hidden;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['labels'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->localModifiedAt) {
            $res['local_modified_at'] = $this->localModifiedAt;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->starred) {
            $res['starred'] = $this->starred;
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
        if (isset($map['check_name_mode'])) {
            $model->checkNameMode = $map['check_name_mode'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['hidden'])) {
            $model->hidden = $map['hidden'];
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['labels'] as $item1) {
                    $model->labels[$n1++] = $item1;
                }
            }
        }

        if (isset($map['local_modified_at'])) {
            $model->localModifiedAt = $map['local_modified_at'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['starred'])) {
            $model->starred = $map['starred'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetSkillResponseBody;

use AlibabaCloud\Dara\Model;

class capabilities extends Model
{
    /**
     * @var bool
     */
    public $delete;

    /**
     * @var bool
     */
    public $download;

    /**
     * @var bool
     */
    public $edit;

    /**
     * @var bool
     */
    public $rollback;

    /**
     * @var bool
     */
    public $share;

    /**
     * @var bool
     */
    public $upload;
    protected $_name = [
        'delete' => 'Delete',
        'download' => 'Download',
        'edit' => 'Edit',
        'rollback' => 'Rollback',
        'share' => 'Share',
        'upload' => 'Upload',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
        }

        if (null !== $this->download) {
            $res['Download'] = $this->download;
        }

        if (null !== $this->edit) {
            $res['Edit'] = $this->edit;
        }

        if (null !== $this->rollback) {
            $res['Rollback'] = $this->rollback;
        }

        if (null !== $this->share) {
            $res['Share'] = $this->share;
        }

        if (null !== $this->upload) {
            $res['Upload'] = $this->upload;
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
        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
        }

        if (isset($map['Download'])) {
            $model->download = $map['Download'];
        }

        if (isset($map['Edit'])) {
            $model->edit = $map['Edit'];
        }

        if (isset($map['Rollback'])) {
            $model->rollback = $map['Rollback'];
        }

        if (isset($map['Share'])) {
            $model->share = $map['Share'];
        }

        if (isset($map['Upload'])) {
            $model->upload = $map['Upload'];
        }

        return $model;
    }
}

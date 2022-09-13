<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UpdateRevisionRequest extends Model
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
     * @var bool
     */
    public $keepForever;

    /**
     * @var string
     */
    public $revisionDescription;

    /**
     * @var string
     */
    public $revisionId;
    protected $_name = [
        'driveId'             => 'drive_id',
        'fileId'              => 'file_id',
        'keepForever'         => 'keep_forever',
        'revisionDescription' => 'revision_description',
        'revisionId'          => 'revision_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->keepForever) {
            $res['keep_forever'] = $this->keepForever;
        }
        if (null !== $this->revisionDescription) {
            $res['revision_description'] = $this->revisionDescription;
        }
        if (null !== $this->revisionId) {
            $res['revision_id'] = $this->revisionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRevisionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['keep_forever'])) {
            $model->keepForever = $map['keep_forever'];
        }
        if (isset($map['revision_description'])) {
            $model->revisionDescription = $map['revision_description'];
        }
        if (isset($map['revision_id'])) {
            $model->revisionId = $map['revision_id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class SubmitFileRequest extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var int
     */
    public $fileId;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $projectIdentifier;
    /**
     * @var bool
     */
    public $skipAllDeployFileExtensions;
    protected $_name = [
        'comment'                     => 'Comment',
        'fileId'                      => 'FileId',
        'projectId'                   => 'ProjectId',
        'projectIdentifier'           => 'ProjectIdentifier',
        'skipAllDeployFileExtensions' => 'SkipAllDeployFileExtensions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }

        if (null !== $this->skipAllDeployFileExtensions) {
            $res['SkipAllDeployFileExtensions'] = $this->skipAllDeployFileExtensions;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }

        if (isset($map['SkipAllDeployFileExtensions'])) {
            $model->skipAllDeployFileExtensions = $map['SkipAllDeployFileExtensions'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class ResumeSubmissionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example sub-13BeXWnGvrOl3MC124tazcJVKaV
     *
     * @var string
     */
    public $submissionId;

    /**
     * @description This parameter is required.
     *
     * @example TestWorkspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'submissionId' => 'SubmissionId',
        'workspace'    => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->submissionId) {
            $res['SubmissionId'] = $this->submissionId;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResumeSubmissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubmissionId'])) {
            $model->submissionId = $map['SubmissionId'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}

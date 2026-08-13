<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUserVisibleKnowledgeBaseContentsResponseBody\items;

use AlibabaCloud\Dara\Model;

class shareInfos extends Model
{
    /**
     * @var string
     */
    public $submissionId;

    /**
     * @var int
     */
    public $submitterId;

    /**
     * @var string
     */
    public $submitterName;

    /**
     * @var string
     */
    public $targetDirectoryId;

    /**
     * @var string
     */
    public $targetDirectoryName;

    /**
     * @var string
     */
    public $targetKbRootDirectoryId;

    /**
     * @var string
     */
    public $targetKbRootDirectoryName;
    protected $_name = [
        'submissionId' => 'submissionId',
        'submitterId' => 'submitterId',
        'submitterName' => 'submitterName',
        'targetDirectoryId' => 'targetDirectoryId',
        'targetDirectoryName' => 'targetDirectoryName',
        'targetKbRootDirectoryId' => 'targetKbRootDirectoryId',
        'targetKbRootDirectoryName' => 'targetKbRootDirectoryName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->submissionId) {
            $res['submissionId'] = $this->submissionId;
        }

        if (null !== $this->submitterId) {
            $res['submitterId'] = $this->submitterId;
        }

        if (null !== $this->submitterName) {
            $res['submitterName'] = $this->submitterName;
        }

        if (null !== $this->targetDirectoryId) {
            $res['targetDirectoryId'] = $this->targetDirectoryId;
        }

        if (null !== $this->targetDirectoryName) {
            $res['targetDirectoryName'] = $this->targetDirectoryName;
        }

        if (null !== $this->targetKbRootDirectoryId) {
            $res['targetKbRootDirectoryId'] = $this->targetKbRootDirectoryId;
        }

        if (null !== $this->targetKbRootDirectoryName) {
            $res['targetKbRootDirectoryName'] = $this->targetKbRootDirectoryName;
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
        if (isset($map['submissionId'])) {
            $model->submissionId = $map['submissionId'];
        }

        if (isset($map['submitterId'])) {
            $model->submitterId = $map['submitterId'];
        }

        if (isset($map['submitterName'])) {
            $model->submitterName = $map['submitterName'];
        }

        if (isset($map['targetDirectoryId'])) {
            $model->targetDirectoryId = $map['targetDirectoryId'];
        }

        if (isset($map['targetDirectoryName'])) {
            $model->targetDirectoryName = $map['targetDirectoryName'];
        }

        if (isset($map['targetKbRootDirectoryId'])) {
            $model->targetKbRootDirectoryId = $map['targetKbRootDirectoryId'];
        }

        if (isset($map['targetKbRootDirectoryName'])) {
            $model->targetKbRootDirectoryName = $map['targetKbRootDirectoryName'];
        }

        return $model;
    }
}

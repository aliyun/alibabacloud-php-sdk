<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskArtifactUpdate\artifact;

class taskArtifactUpdate extends Model
{
    /**
     * @var bool
     */
    public $append;

    /**
     * @var artifact
     */
    public $artifact;

    /**
     * @var string
     */
    public $contextId;

    /**
     * @var bool
     */
    public $lastChunk;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'append' => 'Append',
        'artifact' => 'Artifact',
        'contextId' => 'ContextId',
        'lastChunk' => 'LastChunk',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->artifact) {
            $this->artifact->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->append) {
            $res['Append'] = $this->append;
        }

        if (null !== $this->artifact) {
            $res['Artifact'] = null !== $this->artifact ? $this->artifact->toArray($noStream) : $this->artifact;
        }

        if (null !== $this->contextId) {
            $res['ContextId'] = $this->contextId;
        }

        if (null !== $this->lastChunk) {
            $res['LastChunk'] = $this->lastChunk;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Append'])) {
            $model->append = $map['Append'];
        }

        if (isset($map['Artifact'])) {
            $model->artifact = artifact::fromMap($map['Artifact']);
        }

        if (isset($map['ContextId'])) {
            $model->contextId = $map['ContextId'];
        }

        if (isset($map['LastChunk'])) {
            $model->lastChunk = $map['LastChunk'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

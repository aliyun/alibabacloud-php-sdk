<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\RemoveContextDatabaseSyncJobExclusionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $changed;

    /**
     * @var int
     */
    public $configVersion;

    /**
     * @var string
     */
    public $documentId;

    /**
     * @var bool
     */
    public $excluded;

    /**
     * @var string
     */
    public $jobId;
    protected $_name = [
        'changed' => 'Changed',
        'configVersion' => 'ConfigVersion',
        'documentId' => 'DocumentId',
        'excluded' => 'Excluded',
        'jobId' => 'JobId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changed) {
            $res['Changed'] = $this->changed;
        }

        if (null !== $this->configVersion) {
            $res['ConfigVersion'] = $this->configVersion;
        }

        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }

        if (null !== $this->excluded) {
            $res['Excluded'] = $this->excluded;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (isset($map['Changed'])) {
            $model->changed = $map['Changed'];
        }

        if (isset($map['ConfigVersion'])) {
            $model->configVersion = $map['ConfigVersion'];
        }

        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }

        if (isset($map['Excluded'])) {
            $model->excluded = $map['Excluded'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}

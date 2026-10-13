<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncRunResponseBody\data;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var int
     */
    public $cancelled;

    /**
     * @var int
     */
    public $deferred;

    /**
     * @var int
     */
    public $failed;

    /**
     * @var int
     */
    public $metadataUpdated;

    /**
     * @var int
     */
    public $processing;

    /**
     * @var int
     */
    public $skipped;

    /**
     * @var int
     */
    public $unchanged;

    /**
     * @var int
     */
    public $uploadAccepted;

    /**
     * @var int
     */
    public $uploaded;
    protected $_name = [
        'cancelled' => 'Cancelled',
        'deferred' => 'Deferred',
        'failed' => 'Failed',
        'metadataUpdated' => 'MetadataUpdated',
        'processing' => 'Processing',
        'skipped' => 'Skipped',
        'unchanged' => 'Unchanged',
        'uploadAccepted' => 'UploadAccepted',
        'uploaded' => 'Uploaded',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelled) {
            $res['Cancelled'] = $this->cancelled;
        }

        if (null !== $this->deferred) {
            $res['Deferred'] = $this->deferred;
        }

        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }

        if (null !== $this->metadataUpdated) {
            $res['MetadataUpdated'] = $this->metadataUpdated;
        }

        if (null !== $this->processing) {
            $res['Processing'] = $this->processing;
        }

        if (null !== $this->skipped) {
            $res['Skipped'] = $this->skipped;
        }

        if (null !== $this->unchanged) {
            $res['Unchanged'] = $this->unchanged;
        }

        if (null !== $this->uploadAccepted) {
            $res['UploadAccepted'] = $this->uploadAccepted;
        }

        if (null !== $this->uploaded) {
            $res['Uploaded'] = $this->uploaded;
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
        if (isset($map['Cancelled'])) {
            $model->cancelled = $map['Cancelled'];
        }

        if (isset($map['Deferred'])) {
            $model->deferred = $map['Deferred'];
        }

        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }

        if (isset($map['MetadataUpdated'])) {
            $model->metadataUpdated = $map['MetadataUpdated'];
        }

        if (isset($map['Processing'])) {
            $model->processing = $map['Processing'];
        }

        if (isset($map['Skipped'])) {
            $model->skipped = $map['Skipped'];
        }

        if (isset($map['Unchanged'])) {
            $model->unchanged = $map['Unchanged'];
        }

        if (isset($map['UploadAccepted'])) {
            $model->uploadAccepted = $map['UploadAccepted'];
        }

        if (isset($map['Uploaded'])) {
            $model->uploaded = $map['Uploaded'];
        }

        return $model;
    }
}

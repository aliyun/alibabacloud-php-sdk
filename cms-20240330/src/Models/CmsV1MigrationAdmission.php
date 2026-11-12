<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CmsV1MigrationAdmission extends Model
{
    /**
     * @var bool
     */
    public $newMigrationAllowed;

    /**
     * @var string
     */
    public $policyRevision;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'newMigrationAllowed' => 'newMigrationAllowed',
        'policyRevision' => 'policyRevision',
        'reason' => 'reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newMigrationAllowed) {
            $res['newMigrationAllowed'] = $this->newMigrationAllowed;
        }

        if (null !== $this->policyRevision) {
            $res['policyRevision'] = $this->policyRevision;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
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
        if (isset($map['newMigrationAllowed'])) {
            $model->newMigrationAllowed = $map['newMigrationAllowed'];
        }

        if (isset($map['policyRevision'])) {
            $model->policyRevision = $map['policyRevision'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        return $model;
    }
}

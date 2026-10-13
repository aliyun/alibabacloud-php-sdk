<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class GetMigrateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $migrationId;

    /**
     * @var int
     */
    public $migrationType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'migrationId' => 'migrationId',
        'migrationType' => 'migrationType',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->migrationId) {
            $res['migrationId'] = $this->migrationId;
        }

        if (null !== $this->migrationType) {
            $res['migrationType'] = $this->migrationType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['migrationId'])) {
            $model->migrationId = $map['migrationId'];
        }

        if (isset($map['migrationType'])) {
            $model->migrationType = $map['migrationType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}

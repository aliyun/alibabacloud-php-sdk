<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListMigrationsRequest extends Model
{
    /**
     * @var string
     */
    public $migrationType;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'migrationType' => 'MigrationType',
        'owner' => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->migrationType) {
            $res['MigrationType'] = $this->migrationType;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['MigrationType'])) {
            $model->migrationType = $map['MigrationType'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class InsertSwimmingLaneGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appIds;

    /**
     * @var string
     */
    public $entryApp;

    /**
     * @var string
     */
    public $logicalRegionId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'appIds' => 'AppIds',
        'entryApp' => 'EntryApp',
        'logicalRegionId' => 'LogicalRegionId',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }

        if (null !== $this->entryApp) {
            $res['EntryApp'] = $this->entryApp;
        }

        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }

        if (isset($map['EntryApp'])) {
            $model->entryApp = $map['EntryApp'];
        }

        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

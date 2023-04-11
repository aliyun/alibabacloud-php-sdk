<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetLogicDatabaseRequest extends Model
{
    /**
     * @description The ID of the logical database. You can call the [ListLogicDatabases](~~141874~~) or [SearchDatabase](~~141876~~) operation to obtain the ID of the logical database.
     *
     * @example 1***
     *
     * @var string
     */
    public $dbId;

    /**
     * @description The ID of the tenant.
     *
     * > To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](~~181330~~).
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbId' => 'DbId',
        'tid'  => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogicDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}

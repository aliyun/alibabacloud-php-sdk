<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SyncDatabaseMetaRequest extends Model
{
    /**
     * @description The ID of the database.
     *
     * This parameter is required.
     * @example 123
     *
     * @var string
     */
    public $dbId;

    /**
     * @description Specifies whether the database is a logical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The ID of the tenant.
     *
     * > To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
     * @example -1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbId'  => 'DbId',
        'logic' => 'Logic',
        'tid'   => 'Tid',
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
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncDatabaseMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}

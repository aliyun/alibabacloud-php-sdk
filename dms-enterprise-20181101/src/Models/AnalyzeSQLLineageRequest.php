<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class AnalyzeSQLLineageRequest extends Model
{
    /**
     * @description The database ID.
     *
     * >  You can call one of the [SearchDatabase](~~141876~~), [ListDatabases](~~141873~~), and [GetDatabase](~~141869~~) operations to obtain the database ID provided in the DatabaseId response parameter.
     * @example 123***
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The SQL statement.
     *
     * @example insert into a (id) select id from b;
     *
     * @var string
     */
    public $sqlContent;

    /**
     * @description The tenant ID.
     *
     * >  To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see [Manage DMS tenants](~~181330~~).
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbId'       => 'DbId',
        'sqlContent' => 'SqlContent',
        'tid'        => 'Tid',
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
        if (null !== $this->sqlContent) {
            $res['SqlContent'] = $this->sqlContent;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AnalyzeSQLLineageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['SqlContent'])) {
            $model->sqlContent = $map['SqlContent'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}

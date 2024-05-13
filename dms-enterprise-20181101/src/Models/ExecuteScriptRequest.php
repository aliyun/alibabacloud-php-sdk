<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ExecuteScriptRequest extends Model
{
    /**
     * @description The ID of the database.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $dbId;

    /**
     * @description Specifies whether the database is a logical database.
     *
     * This parameter is required.
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The SQL statements to be executed. Data query language (DQL) statements, data definition language (DDL) statements, and data manipulation language (DML) statements are supported. The control mode of the instance that you want to query determines whether you can execute DDL and DML statements.
     *
     * This parameter is required.
     * @example select dt from report_daily
     *
     * @var string
     */
    public $script;

    /**
     * @description The ID of the tenant.
     *
     * >  To obtain the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see [Tenant information](https://help.aliyun.com/document_detail/181330.html).
     * @example 234
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbId'   => 'DbId',
        'logic'  => 'Logic',
        'script' => 'Script',
        'tid'    => 'Tid',
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
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteScriptRequest
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
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ExecuteScriptRequest extends Model
{
    /**
     * @description Indicates whether the SQL statement is executed.
     *
     * @example 123
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The error code.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description Specifies whether the database is a logical database.
     *
     * @example select dt from report_daily
     *
     * @var string
     */
    public $script;

    /**
     * @description The operation that you want to perform. Set the value to **ExecuteScript**.
     *
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

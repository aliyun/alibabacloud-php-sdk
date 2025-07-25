<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GenerateSqlFromNLRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1***
     *
     * @var string
     */
    public $dbId;

    /**
     * @example MySQL
     *
     * @var string
     */
    public $dialect;

    /**
     * @example state>0代表成功
     *
     * @var string
     */
    public $knowledge;

    /**
     * @example base
     *
     * @var string
     */
    public $level;

    /**
     * @example qwen-plus
     *
     * @var string
     */
    public $model;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $question;

    /**
     * @example users,orders
     *
     * @var string
     */
    public $tableNames;
    protected $_name = [
        'dbId' => 'DbId',
        'dialect' => 'Dialect',
        'knowledge' => 'Knowledge',
        'level' => 'Level',
        'model' => 'Model',
        'question' => 'Question',
        'tableNames' => 'TableNames',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dialect) {
            $res['Dialect'] = $this->dialect;
        }
        if (null !== $this->knowledge) {
            $res['Knowledge'] = $this->knowledge;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateSqlFromNLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Dialect'])) {
            $model->dialect = $map['Dialect'];
        }
        if (isset($map['Knowledge'])) {
            $model->knowledge = $map['Knowledge'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }
        if (isset($map['TableNames'])) {
            $model->tableNames = $map['TableNames'];
        }

        return $model;
    }
}

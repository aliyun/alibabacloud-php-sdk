<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class GenerateSqlFromNLRequest extends Model
{
    /**
     * @var string
     */
    public $dbId;

    /**
     * @var string
     */
    public $dialect;

    /**
     * @var string
     */
    public $knowledge;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $realLoginUserUid;

    /**
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
        'realLoginUserUid' => 'RealLoginUserUid',
        'tableNames' => 'TableNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->realLoginUserUid) {
            $res['RealLoginUserUid'] = $this->realLoginUserUid;
        }

        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
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

        if (isset($map['RealLoginUserUid'])) {
            $model->realLoginUserUid = $map['RealLoginUserUid'];
        }

        if (isset($map['TableNames'])) {
            $model->tableNames = $map['TableNames'];
        }

        return $model;
    }
}

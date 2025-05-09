<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ExecuteScriptRequest extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $script;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbId' => 'DbId',
        'logic' => 'Logic',
        'script' => 'Script',
        'tid' => 'Tid',
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

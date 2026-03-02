<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class StartSqlExecutionBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $sqlFileId;

    /**
     * @var string
     */
    public $sqlScript;
    protected $_name = [
        'description' => 'description',
        'sqlFileId' => 'sqlFileId',
        'sqlScript' => 'sqlScript',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->sqlFileId) {
            $res['sqlFileId'] = $this->sqlFileId;
        }

        if (null !== $this->sqlScript) {
            $res['sqlScript'] = $this->sqlScript;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['sqlFileId'])) {
            $model->sqlFileId = $map['sqlFileId'];
        }

        if (isset($map['sqlScript'])) {
            $model->sqlScript = $map['sqlScript'];
        }

        return $model;
    }
}

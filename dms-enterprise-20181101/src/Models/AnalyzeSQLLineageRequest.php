<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class AnalyzeSQLLineageRequest extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $sqlContent;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbId' => 'DbId',
        'sqlContent' => 'SqlContent',
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

        if (null !== $this->sqlContent) {
            $res['SqlContent'] = $this->sqlContent;
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

        if (isset($map['SqlContent'])) {
            $model->sqlContent = $map['SqlContent'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}

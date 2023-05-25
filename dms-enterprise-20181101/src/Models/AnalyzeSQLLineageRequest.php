<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class AnalyzeSQLLineageRequest extends Model
{
    /**
     * @example 123***
     *
     * @var int
     */
    public $dbId;

    /**
     * @example insert into a (id) select id from b;
     *
     * @var string
     */
    public $sqlContent;

    /**
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

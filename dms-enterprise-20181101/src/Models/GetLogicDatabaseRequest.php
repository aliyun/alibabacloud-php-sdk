<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetLogicDatabaseRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $dbId;
    protected $_name = [
        'tid'  => 'Tid',
        'dbId' => 'DbId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogicDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateProcCorrectOrderRequest\param;

use AlibabaCloud\Tea\Model;

class dbItemList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 19721978
     *
     * @var int
     */
    public $dbId;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;
    protected $_name = [
        'dbId' => 'DbId',
        'logic' => 'Logic',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbItemList
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

        return $model;
    }
}

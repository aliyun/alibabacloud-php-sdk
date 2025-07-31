<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OnlineBizEntityRequest;

use AlibabaCloud\Tea\Model;

class onlineCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 6798087749072704
     *
     * @var int
     */
    public $bizUnitId;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description This parameter is required.
     *
     * @example 101001201
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example BIZ_OBJECT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizUnitId' => 'BizUnitId',
        'comment' => 'Comment',
        'id' => 'Id',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

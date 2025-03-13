<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceCredentialsResponseBody;

use AlibabaCloud\Tea\Model;

class serviceCredentials extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @example 张三
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $ownerStaffId;

    /**
     * @example Codeup
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'           => 'id',
        'ownerName'    => 'ownerName',
        'ownerStaffId' => 'ownerStaffId',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->ownerName) {
            $res['ownerName'] = $this->ownerName;
        }
        if (null !== $this->ownerStaffId) {
            $res['ownerStaffId'] = $this->ownerStaffId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceCredentials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['ownerName'])) {
            $model->ownerName = $map['ownerName'];
        }
        if (isset($map['ownerStaffId'])) {
            $model->ownerStaffId = $map['ownerStaffId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

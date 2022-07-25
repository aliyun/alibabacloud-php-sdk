<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\ListProjectResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $businessId;

    /**
     * @var string
     */
    public $businessName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'businessId'   => 'BusinessId',
        'businessName' => 'BusinessName',
        'createTime'   => 'CreateTime',
        'id'           => 'Id',
        'modifiedTime' => 'ModifiedTime',
        'name'         => 'Name',
        'token'        => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}

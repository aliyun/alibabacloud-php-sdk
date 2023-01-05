<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1234567890
     *
     * @var string
     */
    public $customUserId;

    /**
     * @example Tony
     *
     * @var string
     */
    public $name;

    /**
     * @example {"key1":"value1", "key2":"value2"}
     *
     * @var string
     */
    public $params;

    /**
     * @example 3mtjaqebeq4d****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'customUserId' => 'CustomUserId',
        'name'         => 'Name',
        'params'       => 'Params',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customUserId) {
            $res['CustomUserId'] = $this->customUserId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomUserId'])) {
            $model->customUserId = $map['CustomUserId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

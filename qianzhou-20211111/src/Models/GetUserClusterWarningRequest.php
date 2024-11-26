<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models;

use AlibabaCloud\Tea\Model;

class GetUserClusterWarningRequest extends Model
{
    /**
     * @var string
     */
    public $userID;
    protected $_name = [
        'userID' => 'userID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userID) {
            $res['userID'] = $this->userID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserClusterWarningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        return $model;
    }
}

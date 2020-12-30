<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetUserInputStatisticInfoResponseBody\userInputList;

use AlibabaCloud\Tea\Model;

class clusterStatUserInput extends Model
{
    /**
     * @var int
     */
    public $bytesInput;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'bytesInput' => 'BytesInput',
        'user'       => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bytesInput) {
            $res['BytesInput'] = $this->bytesInput;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterStatUserInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BytesInput'])) {
            $model->bytesInput = $map['BytesInput'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

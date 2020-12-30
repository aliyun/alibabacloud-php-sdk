<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetUserOutputStatisticInfoResponseBody\userOutputList;

use AlibabaCloud\Tea\Model;

class clusterStatUserOutput extends Model
{
    /**
     * @var string
     */
    public $user;

    /**
     * @var int
     */
    public $bytesOutput;
    protected $_name = [
        'user'        => 'User',
        'bytesOutput' => 'BytesOutput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->bytesOutput) {
            $res['BytesOutput'] = $this->bytesOutput;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterStatUserOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['BytesOutput'])) {
            $model->bytesOutput = $map['BytesOutput'];
        }

        return $model;
    }
}

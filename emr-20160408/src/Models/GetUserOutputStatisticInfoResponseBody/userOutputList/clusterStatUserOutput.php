<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetUserOutputStatisticInfoResponseBody\userOutputList;

use AlibabaCloud\Tea\Model;

class clusterStatUserOutput extends Model
{
    /**
     * @var int
     */
    public $bytesOutput;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'bytesOutput' => 'BytesOutput',
        'user'        => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bytesOutput) {
            $res['BytesOutput'] = $this->bytesOutput;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['BytesOutput'])) {
            $model->bytesOutput = $map['BytesOutput'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

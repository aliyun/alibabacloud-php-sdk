<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateUserResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $paging;

    /**
     * @var bool
     */
    public $data;
    protected $_name = [
        'requestId' => 'RequestId',
        'paging'    => 'Paging',
        'data'      => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->paging) {
            $res['Paging'] = $this->paging;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Paging'])) {
            $model->paging = $map['Paging'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}

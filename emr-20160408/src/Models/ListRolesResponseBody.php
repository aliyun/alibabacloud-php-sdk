<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListRolesResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListRolesResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var bool
     */
    public $paging;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'paging'    => 'Paging',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->paging) {
            $res['Paging'] = $this->paging;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRolesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Paging'])) {
            $model->paging = $map['Paging'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

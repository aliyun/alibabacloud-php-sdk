<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListServiceConnectionsRequest extends Model
{
    /**
     * @var string
     */
    public $sericeConnectionType;
    protected $_name = [
        'sericeConnectionType' => 'sericeConnectionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sericeConnectionType) {
            $res['sericeConnectionType'] = $this->sericeConnectionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceConnectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sericeConnectionType'])) {
            $model->sericeConnectionType = $map['sericeConnectionType'];
        }

        return $model;
    }
}

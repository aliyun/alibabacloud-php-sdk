<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAccountMappingResponseBody\userMappings;
use AlibabaCloud\Tea\Model;

class ListAccountMappingResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userMappings[]
     */
    public $userMappings;
    protected $_name = [
        'requestId'    => 'RequestId',
        'userMappings' => 'UserMappings',
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
        if (null !== $this->userMappings) {
            $res['UserMappings'] = [];
            if (null !== $this->userMappings && \is_array($this->userMappings)) {
                $n = 0;
                foreach ($this->userMappings as $item) {
                    $res['UserMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccountMappingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserMappings'])) {
            if (!empty($map['UserMappings'])) {
                $model->userMappings = [];
                $n                   = 0;
                foreach ($map['UserMappings'] as $item) {
                    $model->userMappings[$n++] = null !== $item ? userMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

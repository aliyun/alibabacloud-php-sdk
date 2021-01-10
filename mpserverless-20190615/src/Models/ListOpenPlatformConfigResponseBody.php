<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListOpenPlatformConfigResponseBody\secretList;
use AlibabaCloud\Tea\Model;

class ListOpenPlatformConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var secretList[]
     */
    public $secretList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'secretList' => 'SecretList',
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
        if (null !== $this->secretList) {
            $res['SecretList'] = [];
            if (null !== $this->secretList && \is_array($this->secretList)) {
                $n = 0;
                foreach ($this->secretList as $item) {
                    $res['SecretList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOpenPlatformConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretList'])) {
            if (!empty($map['SecretList'])) {
                $model->secretList = [];
                $n                 = 0;
                foreach ($map['SecretList'] as $item) {
                    $model->secretList[$n++] = null !== $item ? secretList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

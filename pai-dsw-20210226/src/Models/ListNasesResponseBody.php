<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListNasesResponseBody extends Model
{
    /**
     * @description nas文件系统列表
     *
     * @var Nas[]
     */
    public $nases;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nases'     => 'Nases',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nases) {
            $res['Nases'] = [];
            if (null !== $this->nases && \is_array($this->nases)) {
                $n = 0;
                foreach ($this->nases as $item) {
                    $res['Nases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNasesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nases'])) {
            if (!empty($map['Nases'])) {
                $model->nases = [];
                $n            = 0;
                foreach ($map['Nases'] as $item) {
                    $model->nases[$n++] = null !== $item ? Nas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

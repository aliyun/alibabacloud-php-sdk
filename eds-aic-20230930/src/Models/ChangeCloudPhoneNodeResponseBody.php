<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\ChangeCloudPhoneNodeResponseBody\nodeInfos;
use AlibabaCloud\Tea\Model;

class ChangeCloudPhoneNodeResponseBody extends Model
{
    /**
     * @var nodeInfos[]
     */
    public $nodeInfos;

    /**
     * @example 4610632D-D661-5982-B3D7-5D3FD183F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodeInfos' => 'NodeInfos',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeInfos) {
            $res['NodeInfos'] = [];
            if (null !== $this->nodeInfos && \is_array($this->nodeInfos)) {
                $n = 0;
                foreach ($this->nodeInfos as $item) {
                    $res['NodeInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ChangeCloudPhoneNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeInfos'])) {
            if (!empty($map['NodeInfos'])) {
                $model->nodeInfos = [];
                $n = 0;
                foreach ($map['NodeInfos'] as $item) {
                    $model->nodeInfos[$n++] = null !== $item ? nodeInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

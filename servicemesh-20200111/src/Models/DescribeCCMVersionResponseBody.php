<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeCCMVersionResponseBody extends Model
{
    /**
     * @var CCMVersionsValue[]
     */
    public $CCMVersions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'CCMVersions' => 'CCMVersions',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CCMVersions) {
            $res['CCMVersions'] = [];
            if (null !== $this->CCMVersions && \is_array($this->CCMVersions)) {
                foreach ($this->CCMVersions as $key => $val) {
                    $res['CCMVersions'][$key] = null !== $val ? $val->toMap() : $val;
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
     * @return DescribeCCMVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CCMVersions'])) {
            $model->CCMVersions = $map['CCMVersions'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

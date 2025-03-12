<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListVulGlobalConfigResponseBody\vulGlobalConfigList;
use AlibabaCloud\Tea\Model;

class ListVulGlobalConfigResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 7E0618A9-D5EF-4220-9471-C42B5E92719F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The configurations.
     *
     * @var vulGlobalConfigList[]
     */
    public $vulGlobalConfigList;
    protected $_name = [
        'requestId'           => 'RequestId',
        'vulGlobalConfigList' => 'VulGlobalConfigList',
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
        if (null !== $this->vulGlobalConfigList) {
            $res['VulGlobalConfigList'] = [];
            if (null !== $this->vulGlobalConfigList && \is_array($this->vulGlobalConfigList)) {
                $n = 0;
                foreach ($this->vulGlobalConfigList as $item) {
                    $res['VulGlobalConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVulGlobalConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VulGlobalConfigList'])) {
            if (!empty($map['VulGlobalConfigList'])) {
                $model->vulGlobalConfigList = [];
                $n                          = 0;
                foreach ($map['VulGlobalConfigList'] as $item) {
                    $model->vulGlobalConfigList[$n++] = null !== $item ? vulGlobalConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

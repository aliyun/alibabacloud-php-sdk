<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetGrayDomainFunctionResponseBody\domainConfigList;
use AlibabaCloud\Tea\Model;

class BatchSetGrayDomainFunctionResponseBody extends Model
{
    /**
     * @var domainConfigList[]
     */
    public $domainConfigList;

    /**
     * @example 3C6CCEC4-6B88-4D4A-93E4-D47B3D92CF8F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfigList' => 'DomainConfigList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainConfigList) {
            $res['DomainConfigList'] = [];
            if (null !== $this->domainConfigList && \is_array($this->domainConfigList)) {
                $n = 0;
                foreach ($this->domainConfigList as $item) {
                    $res['DomainConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return BatchSetGrayDomainFunctionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainConfigList'])) {
            if (!empty($map['DomainConfigList'])) {
                $model->domainConfigList = [];
                $n                       = 0;
                foreach ($map['DomainConfigList'] as $item) {
                    $model->domainConfigList[$n++] = null !== $item ? domainConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

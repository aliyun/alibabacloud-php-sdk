<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainStagingConfigResponseBody\domainConfigList;
use AlibabaCloud\Tea\Model;

class SetCdnDomainStagingConfigResponseBody extends Model
{
    /**
     * @description The list of domain configurations.
     *
     * @var domainConfigList[]
     */
    public $domainConfigList;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
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
     * @return SetCdnDomainStagingConfigResponseBody
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

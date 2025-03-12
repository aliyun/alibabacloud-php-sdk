<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAccessModeResponseBody\domainModeList;
use AlibabaCloud\Tea\Model;

class DescribeDomainAccessModeResponseBody extends Model
{
    /**
     * @var domainModeList[]
     */
    public $domainModeList;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainModeList' => 'DomainModeList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainModeList) {
            $res['DomainModeList'] = [];
            if (null !== $this->domainModeList && \is_array($this->domainModeList)) {
                $n = 0;
                foreach ($this->domainModeList as $item) {
                    $res['DomainModeList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainAccessModeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainModeList'])) {
            if (!empty($map['DomainModeList'])) {
                $model->domainModeList = [];
                $n                     = 0;
                foreach ($map['DomainModeList'] as $item) {
                    $model->domainModeList[$n++] = null !== $item ? domainModeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

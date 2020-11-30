<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAccessModeResponse\domainModeList;
use AlibabaCloud\Tea\Model;

class DescribeDomainAccessModeResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainModeList[]
     */
    public $domainModeList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'domainModeList' => 'DomainModeList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainModeList', $this->domainModeList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainModeList) {
            $res['DomainModeList'] = [];
            if (null !== $this->domainModeList && \is_array($this->domainModeList)) {
                $n = 0;
                foreach ($this->domainModeList as $item) {
                    $res['DomainModeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainAccessModeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainModeList'])) {
            if (!empty($map['DomainModeList'])) {
                $model->domainModeList = [];
                $n                     = 0;
                foreach ($map['DomainModeList'] as $item) {
                    $model->domainModeList[$n++] = null !== $item ? domainModeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

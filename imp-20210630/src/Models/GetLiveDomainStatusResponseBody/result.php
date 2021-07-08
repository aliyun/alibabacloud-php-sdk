<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveDomainStatusResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveDomainStatusResponseBody\result\liveDomainInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 直播域名信息列表
     *
     * @var liveDomainInfoList[]
     */
    public $liveDomainInfoList;
    protected $_name = [
        'liveDomainInfoList' => 'LiveDomainInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveDomainInfoList) {
            $res['LiveDomainInfoList'] = [];
            if (null !== $this->liveDomainInfoList && \is_array($this->liveDomainInfoList)) {
                $n = 0;
                foreach ($this->liveDomainInfoList as $item) {
                    $res['LiveDomainInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveDomainInfoList'])) {
            if (!empty($map['LiveDomainInfoList'])) {
                $model->liveDomainInfoList = [];
                $n                         = 0;
                foreach ($map['LiveDomainInfoList'] as $item) {
                    $model->liveDomainInfoList[$n++] = null !== $item ? liveDomainInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

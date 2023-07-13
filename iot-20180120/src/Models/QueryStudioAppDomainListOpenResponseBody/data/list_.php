<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppDomainListOpenResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppDomainListOpenResponseBody\data\list_\domainInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var domainInfo[]
     */
    public $domainInfo;
    protected $_name = [
        'domainInfo' => 'DomainInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainInfo) {
            $res['DomainInfo'] = [];
            if (null !== $this->domainInfo && \is_array($this->domainInfo)) {
                $n = 0;
                foreach ($this->domainInfo as $item) {
                    $res['DomainInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainInfo'])) {
            if (!empty($map['DomainInfo'])) {
                $model->domainInfo = [];
                $n                 = 0;
                foreach ($map['DomainInfo'] as $item) {
                    $model->domainInfo[$n++] = null !== $item ? domainInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

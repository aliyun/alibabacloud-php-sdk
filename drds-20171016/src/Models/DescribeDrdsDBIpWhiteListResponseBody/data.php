<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsDBIpWhiteListResponseBody;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsDBIpWhiteListResponseBody\data\ipWhiteList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var ipWhiteList
     */
    public $ipWhiteList;
    protected $_name = [
        'ipWhiteList' => 'IpWhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipWhiteList) {
            $res['IpWhiteList'] = null !== $this->ipWhiteList ? $this->ipWhiteList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpWhiteList'])) {
            $model->ipWhiteList = ipWhiteList::fromMap($map['IpWhiteList']);
        }

        return $model;
    }
}

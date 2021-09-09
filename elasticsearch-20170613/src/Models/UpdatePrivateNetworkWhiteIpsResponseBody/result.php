<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePrivateNetworkWhiteIpsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $privateNetworkIpWhiteList;
    protected $_name = [
        'privateNetworkIpWhiteList' => 'privateNetworkIpWhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateNetworkIpWhiteList) {
            $res['privateNetworkIpWhiteList'] = $this->privateNetworkIpWhiteList;
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
        if (isset($map['privateNetworkIpWhiteList'])) {
            if (!empty($map['privateNetworkIpWhiteList'])) {
                $model->privateNetworkIpWhiteList = $map['privateNetworkIpWhiteList'];
            }
        }

        return $model;
    }
}

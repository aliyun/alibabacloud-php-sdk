<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePrivateNetworkWhiteIpsResponseBody;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->privateNetworkIpWhiteList)) {
            Model::validateArray($this->privateNetworkIpWhiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateNetworkIpWhiteList) {
            if (\is_array($this->privateNetworkIpWhiteList)) {
                $res['privateNetworkIpWhiteList'] = [];
                $n1 = 0;
                foreach ($this->privateNetworkIpWhiteList as $item1) {
                    $res['privateNetworkIpWhiteList'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['privateNetworkIpWhiteList'])) {
            if (!empty($map['privateNetworkIpWhiteList'])) {
                $model->privateNetworkIpWhiteList = [];
                $n1 = 0;
                foreach ($map['privateNetworkIpWhiteList'] as $item1) {
                    $model->privateNetworkIpWhiteList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

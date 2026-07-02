<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\IpWhiteListConfigResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $ipWhiteList;
    protected $_name = [
        'ipWhiteList' => 'IpWhiteList',
    ];

    public function validate()
    {
        if (\is_array($this->ipWhiteList)) {
            Model::validateArray($this->ipWhiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipWhiteList) {
            if (\is_array($this->ipWhiteList)) {
                $res['IpWhiteList'] = [];
                $n1 = 0;
                foreach ($this->ipWhiteList as $item1) {
                    $res['IpWhiteList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['IpWhiteList'])) {
            if (!empty($map['IpWhiteList'])) {
                $model->ipWhiteList = [];
                $n1 = 0;
                foreach ($map['IpWhiteList'] as $item1) {
                    $model->ipWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

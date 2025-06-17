<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class BatchDescribeCdnIpInfoRequest extends Model
{
    /**
     * @var string
     */
    public $ipAddrList;

    /**
     * @var string
     */
    public $language;
    protected $_name = [
        'ipAddrList' => 'IpAddrList',
        'language' => 'Language',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipAddrList) {
            $res['IpAddrList'] = $this->ipAddrList;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
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
        if (isset($map['IpAddrList'])) {
            $model->ipAddrList = $map['IpAddrList'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewTopCostTimeResponseBody;

use AlibabaCloud\Dara\Model;

class urlList extends Model
{
    /**
     * @var float
     */
    public $costTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'costTime' => 'CostTime',
        'domain' => 'Domain',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

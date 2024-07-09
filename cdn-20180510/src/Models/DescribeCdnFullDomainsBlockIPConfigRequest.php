<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnFullDomainsBlockIPConfigRequest extends Model
{
    /**
     * @example 1.XXX.XXX.1,2.XXX.XXX.2
     *
     * @var string
     */
    public $IPList;
    protected $_name = [
        'IPList' => 'IPList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPList) {
            $res['IPList'] = $this->IPList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnFullDomainsBlockIPConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPList'])) {
            $model->IPList = $map['IPList'];
        }

        return $model;
    }
}

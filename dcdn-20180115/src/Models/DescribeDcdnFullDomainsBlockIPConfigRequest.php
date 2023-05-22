<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnFullDomainsBlockIPConfigRequest extends Model
{
    /**
     * @example 10.XX.XX.10/24
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
     * @return DescribeDcdnFullDomainsBlockIPConfigRequest
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

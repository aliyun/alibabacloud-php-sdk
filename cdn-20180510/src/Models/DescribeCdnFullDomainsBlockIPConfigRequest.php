<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class DescribeCdnFullDomainsBlockIPConfigRequest extends Model
{
    /**
     * @var string
     */
    public $IPList;
    protected $_name = [
        'IPList' => 'IPList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IPList) {
            $res['IPList'] = $this->IPList;
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
        if (isset($map['IPList'])) {
            $model->IPList = $map['IPList'];
        }

        return $model;
    }
}

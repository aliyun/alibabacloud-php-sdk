<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class IpWhiteListConfigRequest extends Model
{
    /**
     * @var string
     */
    public $ipWhiteList;

    /**
     * @var string
     */
    public $operation;
    protected $_name = [
        'ipWhiteList' => 'IpWhiteList',
        'operation' => 'Operation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipWhiteList) {
            $res['IpWhiteList'] = $this->ipWhiteList;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
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
            $model->ipWhiteList = $map['IpWhiteList'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}

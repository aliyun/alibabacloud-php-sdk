<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAddrAttributeInfoRequest extends Model
{
    /**
     * @var string
     */
    public $addrs;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'addrs' => 'Addrs',
        'lang'  => 'Lang',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrs) {
            $res['Addrs'] = $this->addrs;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAddrAttributeInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addrs'])) {
            $model->addrs = $map['Addrs'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

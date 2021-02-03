<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAddrAttributeInfoRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $addrs;
    protected $_name = [
        'lang'  => 'Lang',
        'type'  => 'Type',
        'addrs' => 'Addrs',
    ];

    public function validate()
    {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('addrs', $this->addrs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->addrs) {
            $res['Addrs'] = $this->addrs;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Addrs'])) {
            $model->addrs = $map['Addrs'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyResponseBody\attributes\attribute;
use AlibabaCloud\Tea\Model;

class attributes extends Model
{
    /**
     * @var attribute
     */
    public $attribute;

    /**
     * @var string
     */
    public $realServer;

    /**
     * @var int
     */
    public $rsType;
    protected $_name = [
        'attribute'  => 'Attribute',
        'realServer' => 'RealServer',
        'rsType'     => 'RsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['Attribute'] = null !== $this->attribute ? $this->attribute->toMap() : null;
        }
        if (null !== $this->realServer) {
            $res['RealServer'] = $this->realServer;
        }
        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attribute'])) {
            $model->attribute = attribute::fromMap($map['Attribute']);
        }
        if (isset($map['RealServer'])) {
            $model->realServer = $map['RealServer'];
        }
        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }

        return $model;
    }
}

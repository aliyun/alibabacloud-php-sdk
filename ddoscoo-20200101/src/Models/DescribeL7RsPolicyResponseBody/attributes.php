<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyResponseBody\attributes\attribute;

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
        'attribute' => 'Attribute',
        'realServer' => 'RealServer',
        'rsType' => 'RsType',
    ];

    public function validate()
    {
        if (null !== $this->attribute) {
            $this->attribute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['Attribute'] = null !== $this->attribute ? $this->attribute->toArray($noStream) : $this->attribute;
        }

        if (null !== $this->realServer) {
            $res['RealServer'] = $this->realServer;
        }

        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
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

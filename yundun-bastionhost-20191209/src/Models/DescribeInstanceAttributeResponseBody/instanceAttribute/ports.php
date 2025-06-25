<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody\instanceAttribute;

use AlibabaCloud\Dara\Model;

class ports extends Model
{
    /**
     * @var int
     */
    public $customPort;

    /**
     * @var int
     */
    public $standardPort;
    protected $_name = [
        'customPort' => 'CustomPort',
        'standardPort' => 'StandardPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPort) {
            $res['CustomPort'] = $this->customPort;
        }

        if (null !== $this->standardPort) {
            $res['StandardPort'] = $this->standardPort;
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
        if (isset($map['CustomPort'])) {
            $model->customPort = $map['CustomPort'];
        }

        if (isset($map['StandardPort'])) {
            $model->standardPort = $map['StandardPort'];
        }

        return $model;
    }
}

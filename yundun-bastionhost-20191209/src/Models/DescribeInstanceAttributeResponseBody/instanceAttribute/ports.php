<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody\instanceAttribute;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    /**
     * @var int
     */
    public $standardPort;

    /**
     * @var int
     */
    public $customPort;
    protected $_name = [
        'standardPort' => 'StandardPort',
        'customPort'   => 'CustomPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->standardPort) {
            $res['StandardPort'] = $this->standardPort;
        }
        if (null !== $this->customPort) {
            $res['CustomPort'] = $this->customPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StandardPort'])) {
            $model->standardPort = $map['StandardPort'];
        }
        if (isset($map['CustomPort'])) {
            $model->customPort = $map['CustomPort'];
        }

        return $model;
    }
}

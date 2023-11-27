<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody\instanceAttribute;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    /**
     * @description The custom port.
     *
     * >  You can change only the SSH and RDP ports. If O\&M ports are not specified, the value of the StandardPort parameter is returned.
     * @example 600xx
     *
     * @var int
     */
    public $customPort;

    /**
     * @description The standard port of the bastion host. Valid values:
     *
     *   **SSH**: 60022
     *   **RDP**: 63389
     *   **HTTPS**: 443
     *
     * @example 60022
     *
     * @var int
     */
    public $standardPort;
    protected $_name = [
        'customPort'   => 'CustomPort',
        'standardPort' => 'StandardPort',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ports
     */
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

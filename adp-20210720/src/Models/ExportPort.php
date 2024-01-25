<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ExportPort extends Model
{
    /**
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $cidrIP;

    /**
     * @example 53/65000
     *
     * @var string
     */
    public $portRange;

    /**
     * @example all/tcp/udp
     *
     * @var string
     */
    public $protocol;

    /**
     * @example false
     *
     * @var bool
     */
    public $unallowed;
    protected $_name = [
        'cidrIP'    => 'cidrIP',
        'portRange' => 'portRange',
        'protocol'  => 'protocol',
        'unallowed' => 'unallowed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrIP) {
            $res['cidrIP'] = $this->cidrIP;
        }
        if (null !== $this->portRange) {
            $res['portRange'] = $this->portRange;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->unallowed) {
            $res['unallowed'] = $this->unallowed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportPort
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cidrIP'])) {
            $model->cidrIP = $map['cidrIP'];
        }
        if (isset($map['portRange'])) {
            $model->portRange = $map['portRange'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['unallowed'])) {
            $model->unallowed = $map['unallowed'];
        }

        return $model;
    }
}

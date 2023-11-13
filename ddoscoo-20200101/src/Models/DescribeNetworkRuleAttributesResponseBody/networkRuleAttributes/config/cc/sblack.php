<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\cc;

use AlibabaCloud\Tea\Model;

class sblack extends Model
{
    /**
     * @description The threshold that the number of connections initiated from a source IP address can exceed the limit. Set the value to **5**. If the number of connections initiated from a source IP address exceeds the limit five times during the check, the source IP address is added to the blacklist.
     *
     * @example 5
     *
     * @var int
     */
    public $cnt;

    /**
     * @description The interval at which checks are performed. Set the value to **60**. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $during;

    /**
     * @description The validity period of the IP address in the blacklist. Valid values: **60** to **604800**. Unit: seconds.
     *
     * @example 600
     *
     * @var int
     */
    public $expires;

    /**
     * @description The type of the limit that causes a source IP address to be added to the blacklist. Valid values:
     *
     *   **1**: Source New Connection Rate Limit
     *   **2**: Source Concurrent Connection Rate Limit
     *   **3**: PPS Limit for Source
     *   **4**: Bandwidth Limit for Source
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'cnt'     => 'Cnt',
        'during'  => 'During',
        'expires' => 'Expires',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnt) {
            $res['Cnt'] = $this->cnt;
        }
        if (null !== $this->during) {
            $res['During'] = $this->during;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sblack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cnt'])) {
            $model->cnt = $map['Cnt'];
        }
        if (isset($map['During'])) {
            $model->during = $map['During'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

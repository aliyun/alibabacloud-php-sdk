<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcWhitelistResponseBody;

use AlibabaCloud\Tea\Model;

class autoCcWhitelist extends Model
{
    /**
     * @description The IP address of the instance.
     *
     * @example 203.***.***.117
     *
     * @var string
     */
    public $destIp;

    /**
     * @description The validity period of the IP address in the whitelist. Unit: seconds. **0** indicates that the IP address in the whitelist never expires.
     *
     * @example 0
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The IP addresses that is contained in the IP address whitelist.
     *
     * @example 2.2.2.2
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The mode of how an IP address is added to the whitelist. Valid values:
     *
     *   **manual**: manually added
     *   **auto**: automatically added
     *
     * @example manual
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'destIp'   => 'DestIp',
        'endTime'  => 'EndTime',
        'sourceIp' => 'SourceIp',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destIp) {
            $res['DestIp'] = $this->destIp;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoCcWhitelist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestIp'])) {
            $model->destIp = $map['DestIp'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

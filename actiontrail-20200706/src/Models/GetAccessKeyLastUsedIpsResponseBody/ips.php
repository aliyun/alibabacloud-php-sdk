<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedIpsResponseBody;

use AlibabaCloud\Tea\Model;

class ips extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $usedTimestamp;
    protected $_name = [
        'detail'        => 'Detail',
        'ip'            => 'Ip',
        'source'        => 'Source',
        'usedTimestamp' => 'UsedTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->usedTimestamp) {
            $res['UsedTimestamp'] = $this->usedTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UsedTimestamp'])) {
            $model->usedTimestamp = $map['UsedTimestamp'];
        }

        return $model;
    }
}

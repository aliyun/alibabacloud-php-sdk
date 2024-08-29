<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Tea\Model;

class GetResolveStatisticsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description This parameter is required.
     *
     * @example month
     *
     * @var string
     */
    public $granularity;

    /**
     * @example https
     *
     * @var string
     */
    public $protocolName;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $timeSpan;
    protected $_name = [
        'domainName'   => 'DomainName',
        'granularity'  => 'Granularity',
        'protocolName' => 'ProtocolName',
        'timeSpan'     => 'TimeSpan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }
        if (null !== $this->timeSpan) {
            $res['TimeSpan'] = $this->timeSpan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResolveStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }
        if (isset($map['TimeSpan'])) {
            $model->timeSpan = $map['TimeSpan'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssetRiskListRequest extends Model
{
    /**
     * @var string[]
     */
    public $ipAddrList;

    /**
     * @example 4
     *
     * @var int
     */
    public $ipVersion;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 218.17.141.92
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'ipAddrList' => 'IpAddrList',
        'ipVersion'  => 'IpVersion',
        'lang'       => 'Lang',
        'sourceIp'   => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddrList) {
            $res['IpAddrList'] = $this->ipAddrList;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetRiskListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddrList'])) {
            if (!empty($map['IpAddrList'])) {
                $model->ipAddrList = $map['IpAddrList'];
            }
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}

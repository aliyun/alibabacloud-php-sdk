<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeAssetRiskListRequest extends Model
{
    /**
     * @var string[]
     */
    public $ipAddrList;

    /**
     * @var int
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'ipAddrList' => 'IpAddrList',
        'ipVersion' => 'IpVersion',
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        if (\is_array($this->ipAddrList)) {
            Model::validateArray($this->ipAddrList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipAddrList) {
            if (\is_array($this->ipAddrList)) {
                $res['IpAddrList'] = [];
                $n1 = 0;
                foreach ($this->ipAddrList as $item1) {
                    $res['IpAddrList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddrList'])) {
            if (!empty($map['IpAddrList'])) {
                $model->ipAddrList = [];
                $n1 = 0;
                foreach ($map['IpAddrList'] as $item1) {
                    $model->ipAddrList[$n1++] = $item1;
                }
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainConfigResponseBody\result;

use AlibabaCloud\Tea\Model;

class domainConfig extends Model
{
    /**
     * @var string
     */
    public $cname;

    /**
     * @var int
     */
    public $protocolType;

    /**
     * @var string
     */
    public $sourceIps;
    protected $_name = [
        'cname'        => 'Cname',
        'protocolType' => 'ProtocolType',
        'sourceIps'    => 'SourceIps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->sourceIps) {
            $res['SourceIps'] = $this->sourceIps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['SourceIps'])) {
            $model->sourceIps = $map['SourceIps'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeCdnDomainResponseBody;

use AlibabaCloud\Tea\Model;

class ipConfig extends Model
{
    /**
     * @example 25623800702****
     *
     * @var string
     */
    public $configId;

    /**
     * @example 183.157.108.82,140.205.147.26
     *
     * @var string
     */
    public $ipList;

    /**
     * @example black
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configId' => 'ConfigId',
        'ipList'   => 'IpList',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

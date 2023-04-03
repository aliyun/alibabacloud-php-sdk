<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInstanceDomainsResponseBody;

use AlibabaCloud\Tea\Model;

class instanceDomains extends Model
{
    /**
     * @description The time when the domain name was bound with the instance.
     *
     * @example 2020-03-09T02:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The UNIX timestamp that indicates when the domain name was bound with the instance.
     *
     * @example 1583720154000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'domainName'      => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceDomains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}

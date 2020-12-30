<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeSimpleDomainsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $domainList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'domainList' => 'DomainList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSimpleDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = $map['DomainList'];
            }
        }

        return $model;
    }
}

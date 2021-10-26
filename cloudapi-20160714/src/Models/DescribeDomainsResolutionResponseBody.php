<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainsResolutionResponseBody\domainResolutions;
use AlibabaCloud\Tea\Model;

class DescribeDomainsResolutionResponseBody extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainResolutions
     */
    public $domainResolutions;
    protected $_name = [
        'groupId'           => 'GroupId',
        'requestId'         => 'RequestId',
        'domainResolutions' => 'DomainResolutions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainResolutions) {
            $res['DomainResolutions'] = null !== $this->domainResolutions ? $this->domainResolutions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainsResolutionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainResolutions'])) {
            $model->domainResolutions = domainResolutions::fromMap($map['DomainResolutions']);
        }

        return $model;
    }
}

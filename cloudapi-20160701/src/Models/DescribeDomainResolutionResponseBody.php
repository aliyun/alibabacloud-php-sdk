<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeDomainResolutionResponseBody\domainResolutions;
use AlibabaCloud\Tea\Model;

class DescribeDomainResolutionResponseBody extends Model
{
    /**
     * @var domainResolutions
     */
    public $domainResolutions;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainResolutions' => 'DomainResolutions',
        'groupId'           => 'GroupId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainResolutions) {
            $res['DomainResolutions'] = null !== $this->domainResolutions ? $this->domainResolutions->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainResolutionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainResolutions'])) {
            $model->domainResolutions = domainResolutions::fromMap($map['DomainResolutions']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

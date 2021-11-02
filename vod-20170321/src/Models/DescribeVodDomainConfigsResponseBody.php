<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsResponseBody\domainConfigs;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainConfigsResponseBody extends Model
{
    /**
     * @var domainConfigs
     */
    public $domainConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfigs' => 'DomainConfigs',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainConfigs) {
            $res['DomainConfigs'] = null !== $this->domainConfigs ? $this->domainConfigs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainConfigs'])) {
            $model->domainConfigs = domainConfigs::fromMap($map['DomainConfigs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

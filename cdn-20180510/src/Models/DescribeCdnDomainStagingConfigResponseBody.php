<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainStagingConfigResponseBody\domainConfigs;
use AlibabaCloud\Tea\Model;

class DescribeCdnDomainStagingConfigResponseBody extends Model
{
    /**
     * @description The configurations of the domain name.
     *
     * @var domainConfigs[]
     */
    public $domainConfigs;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the request.
     *
     * @example C80705BF-0F76-41FA-BAD1-5B59296A4E59
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfigs' => 'DomainConfigs',
        'domainName'    => 'DomainName',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainConfigs) {
            $res['DomainConfigs'] = [];
            if (null !== $this->domainConfigs && \is_array($this->domainConfigs)) {
                $n = 0;
                foreach ($this->domainConfigs as $item) {
                    $res['DomainConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnDomainStagingConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainConfigs'])) {
            if (!empty($map['DomainConfigs'])) {
                $model->domainConfigs = [];
                $n                    = 0;
                foreach ($map['DomainConfigs'] as $item) {
                    $model->domainConfigs[$n++] = null !== $item ? domainConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

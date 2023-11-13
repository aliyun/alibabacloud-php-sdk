<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainsResponseBody extends Model
{
    /**
     * @description An array consisting of details of the domain name for which the forwarding rules are configured.
     *
     * @var string[]
     */
    public $domains;

    /**
     * @description The ID of the request.
     *
     * @example F908E959-ADA8-4D7B-8A05-FF2F67F50964
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domains'   => 'Domains',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

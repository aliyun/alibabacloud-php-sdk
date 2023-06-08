<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\ListDomainsByLogConfigIdResponseBody\domains;
use AlibabaCloud\Tea\Model;

class ListDomainsByLogConfigIdResponseBody extends Model
{
    /**
     * @description The domain names.
     *
     * @var domains
     */
    public $domains;

    /**
     * @description The ID of the request.
     *
     * @example 9732E117-8A37-49FD-A36F-ABBB87556CA7
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
            $res['Domains'] = null !== $this->domains ? $this->domains->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDomainsByLogConfigIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            $model->domains = domains::fromMap($map['Domains']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\ListDomainsByLogConfigIdResponseBody\domains;
use AlibabaCloud\Tea\Model;

class ListDomainsByLogConfigIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domains
     */
    public $domains;
    protected $_name = [
        'requestId' => 'RequestId',
        'domains'   => 'Domains',
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
        if (null !== $this->domains) {
            $res['Domains'] = null !== $this->domains ? $this->domains->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Domains'])) {
            $model->domains = domains::fromMap($map['Domains']);
        }

        return $model;
    }
}

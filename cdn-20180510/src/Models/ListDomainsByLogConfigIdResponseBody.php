<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListDomainsByLogConfigIdResponseBody\domains;

class ListDomainsByLogConfigIdResponseBody extends Model
{
    /**
     * @var domains
     */
    public $domains;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domains' => 'Domains',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->domains) {
            $this->domains->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = null !== $this->domains ? $this->domains->toArray($noStream) : $this->domains;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainConfigsResponseBody\domainConfigList;

class BatchSetDcdnDomainConfigsResponseBody extends Model
{
    /**
     * @var domainConfigList
     */
    public $domainConfigList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfigList' => 'DomainConfigList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->domainConfigList) {
            $this->domainConfigList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainConfigList) {
            $res['DomainConfigList'] = null !== $this->domainConfigList ? $this->domainConfigList->toArray($noStream) : $this->domainConfigList;
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
        if (isset($map['DomainConfigList'])) {
            $model->domainConfigList = domainConfigList::fromMap($map['DomainConfigList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

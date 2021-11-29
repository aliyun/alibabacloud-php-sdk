<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetCdnDomainConfigResponseBody\domainConfigList;
use AlibabaCloud\Tea\Model;

class BatchSetCdnDomainConfigResponseBody extends Model
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
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainConfigList) {
            $res['DomainConfigList'] = null !== $this->domainConfigList ? $this->domainConfigList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSetCdnDomainConfigResponseBody
     */
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

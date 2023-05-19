<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetCdnDomainConfigResponseBody\domainConfigList;
use AlibabaCloud\Tea\Model;

class BatchSetCdnDomainConfigResponseBody extends Model
{
    /**
     * @description > *   You can call this operation up to 30 times per second per account.
     *   You can specify multiple domain names and must separate them with commas (,). You can specify up to 50 domain names in each call.
     *   If the BatchSetCdnDomainConfig operation is successful, a unique configuration ID (ConfigId) is generated. You can use configuration IDs to update or delete configurations. For more information, see [Usage notes on ConfigId](~~388994~~).
     *
     * @var domainConfigList
     */
    public $domainConfigList;

    /**
     * @description The name of the feature.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
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

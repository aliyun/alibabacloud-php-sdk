<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetDefaultDomainResponseBody extends Model
{
    /**
     * @description The default domain name.
     *
     * @example examplecompany.onaliyun.com
     *
     * @var string
     */
    public $defaultDomainName;

    /**
     * @description The ID of the request.
     *
     * @example 66815255-7CCE-4759-AC37-9755794C3626
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'defaultDomainName' => 'DefaultDomainName',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultDomainName) {
            $res['DefaultDomainName'] = $this->defaultDomainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDefaultDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultDomainName'])) {
            $model->defaultDomainName = $map['DefaultDomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

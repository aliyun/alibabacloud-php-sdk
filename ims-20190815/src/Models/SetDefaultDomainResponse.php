<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetDefaultDomainResponse extends Model
{
    /**
     * @var string
     */
    public $defaultDomainName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'defaultDomainName' => 'DefaultDomainName',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('defaultDomainName', $this->defaultDomainName, true);
        Model::validateRequired('requestId', $this->requestId, true);
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
     * @return SetDefaultDomainResponse
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

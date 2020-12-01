<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetDefaultDomainResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $defaultDomainName;
    protected $_name = [
        'requestId'         => 'RequestId',
        'defaultDomainName' => 'DefaultDomainName',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('defaultDomainName', $this->defaultDomainName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->defaultDomainName) {
            $res['DefaultDomainName'] = $this->defaultDomainName;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DefaultDomainName'])) {
            $model->defaultDomainName = $map['DefaultDomainName'];
        }

        return $model;
    }
}

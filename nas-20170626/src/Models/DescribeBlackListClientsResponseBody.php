<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeBlackListClientsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clients;
    protected $_name = [
        'requestId' => 'RequestId',
        'clients'   => 'Clients',
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
        if (null !== $this->clients) {
            $res['Clients'] = $this->clients;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBlackListClientsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Clients'])) {
            $model->clients = $map['Clients'];
        }

        return $model;
    }
}

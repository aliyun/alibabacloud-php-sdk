<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeBlackListClientsResponseBody extends Model
{
    /**
     * @description The IDs of clients and the status of each client. This parameter contains a JSON object, for example, {"client1": "EVICTING","client2":"EVICTED"}.
     *
     * Available client statuses include:
     *
     *   EVICTING indicates that a client is being removed
     *   EVICTED indicates that a client is removed
     *   ACCEPTING indicates that the write access to the file system is being granted to a client
     *   ACCEPTABLE indicates that the write access to the file system is granted to a client
     *
     * @example {"client1": "EVICTING","client2":"EVICTED"}
     *
     * @var string
     */
    public $clients;

    /**
     * @description The ID of the request.
     *
     * @example A70BEE5D-76D3-49FB-B58F-1F398211A5C3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clients'   => 'Clients',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clients) {
            $res['Clients'] = $this->clients;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Clients'])) {
            $model->clients = $map['Clients'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

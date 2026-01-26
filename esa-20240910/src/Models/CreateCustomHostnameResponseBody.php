<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomHostnameResponseBody extends Model
{
    /**
     * @var string
     */
    public $hostname;

    /**
     * @var int
     */
    public $hostnameId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostname' => 'Hostname',
        'hostnameId' => 'HostnameId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->hostnameId) {
            $res['HostnameId'] = $this->hostnameId;
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
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['HostnameId'])) {
            $model->hostnameId = $map['HostnameId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

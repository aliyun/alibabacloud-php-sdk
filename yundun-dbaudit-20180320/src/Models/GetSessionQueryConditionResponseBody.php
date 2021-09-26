<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetSessionQueryConditionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $dbUserList;

    /**
     * @var string[]
     */
    public $clientIpList;

    /**
     * @var string[]
     */
    public $clientProgramList;

    /**
     * @var string[]
     */
    public $dbServerList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'dbUserList'        => 'DbUserList',
        'clientIpList'      => 'ClientIpList',
        'clientProgramList' => 'ClientProgramList',
        'dbServerList'      => 'DbServerList',
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
        if (null !== $this->dbUserList) {
            $res['DbUserList'] = $this->dbUserList;
        }
        if (null !== $this->clientIpList) {
            $res['ClientIpList'] = $this->clientIpList;
        }
        if (null !== $this->clientProgramList) {
            $res['ClientProgramList'] = $this->clientProgramList;
        }
        if (null !== $this->dbServerList) {
            $res['DbServerList'] = $this->dbServerList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSessionQueryConditionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DbUserList'])) {
            if (!empty($map['DbUserList'])) {
                $model->dbUserList = $map['DbUserList'];
            }
        }
        if (isset($map['ClientIpList'])) {
            if (!empty($map['ClientIpList'])) {
                $model->clientIpList = $map['ClientIpList'];
            }
        }
        if (isset($map['ClientProgramList'])) {
            if (!empty($map['ClientProgramList'])) {
                $model->clientProgramList = $map['ClientProgramList'];
            }
        }
        if (isset($map['DbServerList'])) {
            if (!empty($map['DbServerList'])) {
                $model->dbServerList = $map['DbServerList'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class GetManagerInfoByAuthCodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $teamName;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $waId;
    protected $_name = [
        'orgId' => 'OrgId',
        'phone' => 'Phone',
        'requestId' => 'RequestId',
        'teamName' => 'TeamName',
        'userName' => 'UserName',
        'waId' => 'WaId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->teamName) {
            $res['TeamName'] = $this->teamName;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->waId) {
            $res['WaId'] = $this->waId;
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
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TeamName'])) {
            $model->teamName = $map['TeamName'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['WaId'])) {
            $model->waId = $map['WaId'];
        }

        return $model;
    }
}

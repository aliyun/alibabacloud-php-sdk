<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class GetManagerInfoByAuthCodeResponseBody extends Model
{
    /**
     * @description The organization ID.
     *
     * @example 12345678901234****
     *
     * @var string
     */
    public $orgId;

    /**
     * @description The mobile number.
     *
     * @example 1301234****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The team name.
     *
     * @example devteam
     *
     * @var string
     */
    public $teamName;

    /**
     * @description The tenant name.
     *
     * @example zhangsan
     *
     * @var string
     */
    public $userName;

    /**
     * @description The ID of the Elastic Desktop Service account.
     *
     * @example 12345678901234****
     *
     * @var int
     */
    public $waId;
    protected $_name = [
        'orgId'     => 'OrgId',
        'phone'     => 'Phone',
        'requestId' => 'RequestId',
        'teamName'  => 'TeamName',
        'userName'  => 'UserName',
        'waId'      => 'WaId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetManagerInfoByAuthCodeResponseBody
     */
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

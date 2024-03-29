<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class ListEmailVerificationRequest extends Model
{
    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $beginCreateTime;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 1522080000000
     *
     * @var int
     */
    public $endCreateTime;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 500
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @example 1
     *
     * @var int
     */
    public $verificationStatus;
    protected $_name = [
        'beginCreateTime'    => 'BeginCreateTime',
        'email'              => 'Email',
        'endCreateTime'      => 'EndCreateTime',
        'lang'               => 'Lang',
        'pageNum'            => 'PageNum',
        'pageSize'           => 'PageSize',
        'userClientIp'       => 'UserClientIp',
        'verificationStatus' => 'VerificationStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginCreateTime) {
            $res['BeginCreateTime'] = $this->beginCreateTime;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->endCreateTime) {
            $res['EndCreateTime'] = $this->endCreateTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->verificationStatus) {
            $res['VerificationStatus'] = $this->verificationStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEmailVerificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginCreateTime'])) {
            $model->beginCreateTime = $map['BeginCreateTime'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EndCreateTime'])) {
            $model->endCreateTime = $map['EndCreateTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['VerificationStatus'])) {
            $model->verificationStatus = $map['VerificationStatus'];
        }

        return $model;
    }
}

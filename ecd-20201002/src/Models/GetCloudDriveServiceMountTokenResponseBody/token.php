<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\GetCloudDriveServiceMountTokenResponseBody;

use AlibabaCloud\Tea\Model;

class token extends Model
{
    /**
     * @example h****
     *
     * @var string
     */
    public $domainId;

    /**
     * @example 2022-10-10T04:41:35Z
     *
     * @var string
     */
    public $expiredAfter;

    /**
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example 7836fa6eced7dc8d54c775k34iu3h4i2kh534f****
     *
     * @var string
     */
    public $token;

    /**
     * @example 6050416754750
     *
     * @var int
     */
    public $totalSize;

    /**
     * @example 605089
     *
     * @var int
     */
    public $usedSize;
    protected $_name = [
        'domainId'     => 'DomainId',
        'expiredAfter' => 'ExpiredAfter',
        'status'       => 'Status',
        'token'        => 'Token',
        'totalSize'    => 'TotalSize',
        'usedSize'     => 'UsedSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->expiredAfter) {
            $res['ExpiredAfter'] = $this->expiredAfter;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->usedSize) {
            $res['UsedSize'] = $this->usedSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return token
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['ExpiredAfter'])) {
            $model->expiredAfter = $map['ExpiredAfter'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['UsedSize'])) {
            $model->usedSize = $map['UsedSize'];
        }

        return $model;
    }
}

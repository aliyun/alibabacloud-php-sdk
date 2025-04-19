<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\GetCloudDriveServiceMountTokenResponseBody;

use AlibabaCloud\Dara\Model;

class token extends Model
{
    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $expiredAfter;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $token;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var int
     */
    public $usedSize;
    protected $_name = [
        'domainId' => 'DomainId',
        'expiredAfter' => 'ExpiredAfter',
        'status' => 'Status',
        'token' => 'Token',
        'totalSize' => 'TotalSize',
        'usedSize' => 'UsedSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

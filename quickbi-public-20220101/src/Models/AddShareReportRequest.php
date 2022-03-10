<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddShareReportRequest extends Model
{
    /**
     * @var int
     */
    public $authPoint;

    /**
     * @var int
     */
    public $expireDate;

    /**
     * @var string
     */
    public $shareToId;

    /**
     * @var int
     */
    public $shareToType;

    /**
     * @var string
     */
    public $worksId;
    protected $_name = [
        'authPoint'   => 'AuthPoint',
        'expireDate'  => 'ExpireDate',
        'shareToId'   => 'ShareToId',
        'shareToType' => 'ShareToType',
        'worksId'     => 'WorksId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authPoint) {
            $res['AuthPoint'] = $this->authPoint;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->shareToId) {
            $res['ShareToId'] = $this->shareToId;
        }
        if (null !== $this->shareToType) {
            $res['ShareToType'] = $this->shareToType;
        }
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddShareReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthPoint'])) {
            $model->authPoint = $map['AuthPoint'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['ShareToId'])) {
            $model->shareToId = $map['ShareToId'];
        }
        if (isset($map['ShareToType'])) {
            $model->shareToType = $map['ShareToType'];
        }
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }

        return $model;
    }
}

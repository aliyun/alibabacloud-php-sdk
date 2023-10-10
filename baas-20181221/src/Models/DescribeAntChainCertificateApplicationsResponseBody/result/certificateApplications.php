<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsResponseBody\result;

use AlibabaCloud\Tea\Model;

class certificateApplications extends Model
{
    /**
     * @example 1q8B5R9p
     *
     * @var string
     */
    public $antChainId;

    /**
     * @description Bid
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @example 1563949275000
     *
     * @var int
     */
    public $createtime;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @example 1563949275000
     *
     * @var int
     */
    public $updatetime;

    /**
     * @example uid-128712635330****
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'antChainId' => 'AntChainId',
        'bid'        => 'Bid',
        'createtime' => 'Createtime',
        'status'     => 'Status',
        'updatetime' => 'Updatetime',
        'username'   => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->createtime) {
            $res['Createtime'] = $this->createtime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updatetime) {
            $res['Updatetime'] = $this->updatetime;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificateApplications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Createtime'])) {
            $model->createtime = $map['Createtime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Updatetime'])) {
            $model->updatetime = $map['Updatetime'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}

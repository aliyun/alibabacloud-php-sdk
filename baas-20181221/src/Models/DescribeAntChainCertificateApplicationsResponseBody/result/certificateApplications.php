<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsResponseBody\result;

use AlibabaCloud\Tea\Model;

class certificateApplications extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updatetime;

    /**
     * @var int
     */
    public $createtime;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'status'     => 'Status',
        'updatetime' => 'Updatetime',
        'createtime' => 'Createtime',
        'bid'        => 'Bid',
        'antChainId' => 'AntChainId',
        'username'   => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updatetime) {
            $res['Updatetime'] = $this->updatetime;
        }
        if (null !== $this->createtime) {
            $res['Createtime'] = $this->createtime;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Updatetime'])) {
            $model->updatetime = $map['Updatetime'];
        }
        if (isset($map['Createtime'])) {
            $model->createtime = $map['Createtime'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}

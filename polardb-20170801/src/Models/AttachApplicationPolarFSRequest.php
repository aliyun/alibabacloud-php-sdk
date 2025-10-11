<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class AttachApplicationPolarFSRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $polarFSAccessKeyId;

    /**
     * @var string
     */
    public $polarFSAccessKeySecret;

    /**
     * @var string
     */
    public $polarFSInstanceId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'polarFSAccessKeyId' => 'PolarFSAccessKeyId',
        'polarFSAccessKeySecret' => 'PolarFSAccessKeySecret',
        'polarFSInstanceId' => 'PolarFSInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->polarFSAccessKeyId) {
            $res['PolarFSAccessKeyId'] = $this->polarFSAccessKeyId;
        }

        if (null !== $this->polarFSAccessKeySecret) {
            $res['PolarFSAccessKeySecret'] = $this->polarFSAccessKeySecret;
        }

        if (null !== $this->polarFSInstanceId) {
            $res['PolarFSInstanceId'] = $this->polarFSInstanceId;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['PolarFSAccessKeyId'])) {
            $model->polarFSAccessKeyId = $map['PolarFSAccessKeyId'];
        }

        if (isset($map['PolarFSAccessKeySecret'])) {
            $model->polarFSAccessKeySecret = $map['PolarFSAccessKeySecret'];
        }

        if (isset($map['PolarFSInstanceId'])) {
            $model->polarFSInstanceId = $map['PolarFSInstanceId'];
        }

        return $model;
    }
}

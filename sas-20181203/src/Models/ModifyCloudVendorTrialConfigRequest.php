<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyCloudVendorTrialConfigRequest extends Model
{
    /**
     * @var int
     */
    public $authId;
    /**
     * @var string
     */
    public $authInfo;
    /**
     * @var bool
     */
    public $deleteTrail;
    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'authId'      => 'AuthId',
        'authInfo'    => 'AuthInfo',
        'deleteTrail' => 'DeleteTrail',
        'vendor'      => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }

        if (null !== $this->authInfo) {
            $res['AuthInfo'] = $this->authInfo;
        }

        if (null !== $this->deleteTrail) {
            $res['DeleteTrail'] = $this->deleteTrail;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }

        if (isset($map['AuthInfo'])) {
            $model->authInfo = $map['AuthInfo'];
        }

        if (isset($map['DeleteTrail'])) {
            $model->deleteTrail = $map['DeleteTrail'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}

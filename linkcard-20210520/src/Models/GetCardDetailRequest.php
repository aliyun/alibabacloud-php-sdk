<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class GetCardDetailRequest extends Model
{
    /**
     * @var bool
     */
    public $destroyCard;

    /**
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $showPsim;
    protected $_name = [
        'destroyCard' => 'DestroyCard',
        'iccid'       => 'Iccid',
        'instanceId'  => 'InstanceId',
        'showPsim'    => 'ShowPsim',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destroyCard) {
            $res['DestroyCard'] = $this->destroyCard;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->showPsim) {
            $res['ShowPsim'] = $this->showPsim;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCardDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestroyCard'])) {
            $model->destroyCard = $map['DestroyCard'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ShowPsim'])) {
            $model->showPsim = $map['ShowPsim'];
        }

        return $model;
    }
}

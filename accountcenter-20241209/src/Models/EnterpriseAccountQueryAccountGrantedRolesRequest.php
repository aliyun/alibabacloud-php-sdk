<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;

class EnterpriseAccountQueryAccountGrantedRolesRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var bool
     */
    public $isOpenApi;

    /**
     * @var string
     */
    public $orientedEcId;

    /**
     * @var string
     */
    public $orientedLeId;

    /**
     * @var string
     */
    public $orientedNbId;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var bool
     */
    public $showCompleteInfo;
    protected $_name = [
        'appName' => 'AppName',
        'isOpenApi' => 'IsOpenApi',
        'orientedEcId' => 'OrientedEcId',
        'orientedLeId' => 'OrientedLeId',
        'orientedNbId' => 'OrientedNbId',
        'pk' => 'Pk',
        'showCompleteInfo' => 'ShowCompleteInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->isOpenApi) {
            $res['IsOpenApi'] = $this->isOpenApi;
        }

        if (null !== $this->orientedEcId) {
            $res['OrientedEcId'] = $this->orientedEcId;
        }

        if (null !== $this->orientedLeId) {
            $res['OrientedLeId'] = $this->orientedLeId;
        }

        if (null !== $this->orientedNbId) {
            $res['OrientedNbId'] = $this->orientedNbId;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->showCompleteInfo) {
            $res['ShowCompleteInfo'] = $this->showCompleteInfo;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['IsOpenApi'])) {
            $model->isOpenApi = $map['IsOpenApi'];
        }

        if (isset($map['OrientedEcId'])) {
            $model->orientedEcId = $map['OrientedEcId'];
        }

        if (isset($map['OrientedLeId'])) {
            $model->orientedLeId = $map['OrientedLeId'];
        }

        if (isset($map['OrientedNbId'])) {
            $model->orientedNbId = $map['OrientedNbId'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['ShowCompleteInfo'])) {
            $model->showCompleteInfo = $map['ShowCompleteInfo'];
        }

        return $model;
    }
}

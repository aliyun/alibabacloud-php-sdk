<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindCustomerSnapshotResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindCustomerSnapshotResponseBody\customerSnapshot\accountInfoSnapshotModel;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindCustomerSnapshotResponseBody\customerSnapshot\accountTaxSnapshotModel;

class customerSnapshot extends Model
{
    /**
     * @var accountInfoSnapshotModel
     */
    public $accountInfoSnapshotModel;

    /**
     * @var accountTaxSnapshotModel
     */
    public $accountTaxSnapshotModel;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $infoType;

    /**
     * @var int
     */
    public $kpId;
    protected $_name = [
        'accountInfoSnapshotModel' => 'AccountInfoSnapshotModel',
        'accountTaxSnapshotModel' => 'AccountTaxSnapshotModel',
        'gmtCreate' => 'GmtCreate',
        'id' => 'Id',
        'infoType' => 'InfoType',
        'kpId' => 'KpId',
    ];

    public function validate()
    {
        if (null !== $this->accountInfoSnapshotModel) {
            $this->accountInfoSnapshotModel->validate();
        }
        if (null !== $this->accountTaxSnapshotModel) {
            $this->accountTaxSnapshotModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountInfoSnapshotModel) {
            $res['AccountInfoSnapshotModel'] = null !== $this->accountInfoSnapshotModel ? $this->accountInfoSnapshotModel->toArray($noStream) : $this->accountInfoSnapshotModel;
        }

        if (null !== $this->accountTaxSnapshotModel) {
            $res['AccountTaxSnapshotModel'] = null !== $this->accountTaxSnapshotModel ? $this->accountTaxSnapshotModel->toArray($noStream) : $this->accountTaxSnapshotModel;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->infoType) {
            $res['InfoType'] = $this->infoType;
        }

        if (null !== $this->kpId) {
            $res['KpId'] = $this->kpId;
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
        if (isset($map['AccountInfoSnapshotModel'])) {
            $model->accountInfoSnapshotModel = accountInfoSnapshotModel::fromMap($map['AccountInfoSnapshotModel']);
        }

        if (isset($map['AccountTaxSnapshotModel'])) {
            $model->accountTaxSnapshotModel = accountTaxSnapshotModel::fromMap($map['AccountTaxSnapshotModel']);
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InfoType'])) {
            $model->infoType = $map['InfoType'];
        }

        if (isset($map['KpId'])) {
            $model->kpId = $map['KpId'];
        }

        return $model;
    }
}

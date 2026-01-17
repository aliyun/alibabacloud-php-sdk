<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\AppInstanceAggregate;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\AppInstanceAggregate\partnerDetail\bindData;

class partnerDetail extends Model
{
    /**
     * @var bindData
     */
    public $bindData;

    /**
     * @var string
     */
    public $partnerId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bindData' => 'BindData',
        'partnerId' => 'PartnerId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->bindData) {
            $this->bindData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindData) {
            $res['BindData'] = null !== $this->bindData ? $this->bindData->toArray($noStream) : $this->bindData;
        }

        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BindData'])) {
            $model->bindData = bindData::fromMap($map['BindData']);
        }

        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataSourcePropertiesRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $quickBIOwnerId;

    /**
     * @var string
     */
    public $showName;
    protected $_name = [
        'description' => 'Description',
        'dsId' => 'DsId',
        'quickBIOwnerId' => 'QuickBIOwnerId',
        'showName' => 'ShowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }

        if (null !== $this->quickBIOwnerId) {
            $res['QuickBIOwnerId'] = $this->quickBIOwnerId;
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }

        if (isset($map['QuickBIOwnerId'])) {
            $model->quickBIOwnerId = $map['QuickBIOwnerId'];
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}

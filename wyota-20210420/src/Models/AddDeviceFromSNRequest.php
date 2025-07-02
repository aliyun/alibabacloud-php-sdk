<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class AddDeviceFromSNRequest extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $customProperty;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $labelContents;

    /**
     * @var string
     */
    public $secureNetworkType;

    /**
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'alias' => 'Alias',
        'customProperty' => 'CustomProperty',
        'groupId' => 'GroupId',
        'labelContents' => 'LabelContents',
        'secureNetworkType' => 'SecureNetworkType',
        'serialNo' => 'SerialNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->customProperty) {
            $res['CustomProperty'] = $this->customProperty;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->labelContents) {
            $res['LabelContents'] = $this->labelContents;
        }

        if (null !== $this->secureNetworkType) {
            $res['SecureNetworkType'] = $this->secureNetworkType;
        }

        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['CustomProperty'])) {
            $model->customProperty = $map['CustomProperty'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['LabelContents'])) {
            $model->labelContents = $map['LabelContents'];
        }

        if (isset($map['SecureNetworkType'])) {
            $model->secureNetworkType = $map['SecureNetworkType'];
        }

        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}

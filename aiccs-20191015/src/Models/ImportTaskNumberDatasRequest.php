<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class ImportTaskNumberDatasRequest extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var mixed[][]
     */
    public $phoneNumberList;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'dataType' => 'DataType',
        'ossFileName' => 'OssFileName',
        'ownerId' => 'OwnerId',
        'phoneNumberList' => 'PhoneNumberList',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->phoneNumberList)) {
            Model::validateArray($this->phoneNumberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->phoneNumberList) {
            if (\is_array($this->phoneNumberList)) {
                $res['PhoneNumberList'] = [];
                $n1 = 0;
                foreach ($this->phoneNumberList as $item1) {
                    if (\is_array($item1)) {
                        $res['PhoneNumberList'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['PhoneNumberList'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PhoneNumberList'])) {
            if (!empty($map['PhoneNumberList'])) {
                $model->phoneNumberList = [];
                $n1 = 0;
                foreach ($map['PhoneNumberList'] as $item1) {
                    if (!empty($item1)) {
                        $model->phoneNumberList[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->phoneNumberList[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

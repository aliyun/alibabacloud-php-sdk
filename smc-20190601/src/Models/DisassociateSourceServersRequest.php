<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Dara\Model;

class DisassociateSourceServersRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string[]
     */
    public $sourceId;

    /**
     * @var string
     */
    public $workgroupId;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'sourceId' => 'SourceId',
        'workgroupId' => 'WorkgroupId',
    ];

    public function validate()
    {
        if (\is_array($this->sourceId)) {
            Model::validateArray($this->sourceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->sourceId) {
            if (\is_array($this->sourceId)) {
                $res['SourceId'] = [];
                $n1 = 0;
                foreach ($this->sourceId as $item1) {
                    $res['SourceId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workgroupId) {
            $res['WorkgroupId'] = $this->workgroupId;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['SourceId'])) {
            if (!empty($map['SourceId'])) {
                $model->sourceId = [];
                $n1 = 0;
                foreach ($map['SourceId'] as $item1) {
                    $model->sourceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkgroupId'])) {
            $model->workgroupId = $map['WorkgroupId'];
        }

        return $model;
    }
}

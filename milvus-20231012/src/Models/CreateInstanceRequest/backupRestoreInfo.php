<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\CreateInstanceRequest;

use AlibabaCloud\Dara\Model;

class backupRestoreInfo extends Model
{
    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupName;

    /**
     * @var string
     */
    public $sourceClusterId;
    protected $_name = [
        'backupId' => 'backupId',
        'backupName' => 'backupName',
        'sourceClusterId' => 'sourceClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['backupId'] = $this->backupId;
        }

        if (null !== $this->backupName) {
            $res['backupName'] = $this->backupName;
        }

        if (null !== $this->sourceClusterId) {
            $res['sourceClusterId'] = $this->sourceClusterId;
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
        if (isset($map['backupId'])) {
            $model->backupId = $map['backupId'];
        }

        if (isset($map['backupName'])) {
            $model->backupName = $map['backupName'];
        }

        if (isset($map['sourceClusterId'])) {
            $model->sourceClusterId = $map['sourceClusterId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ModifyMasterSpecRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceDescription;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $masterAISpec;
    /**
     * @var int
     */
    public $masterCU;
    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId'          => 'DBInstanceId',
        'masterAISpec'          => 'MasterAISpec',
        'masterCU'              => 'MasterCU',
        'resourceGroupId'       => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->masterAISpec) {
            $res['MasterAISpec'] = $this->masterAISpec;
        }

        if (null !== $this->masterCU) {
            $res['MasterCU'] = $this->masterCU;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['MasterAISpec'])) {
            $model->masterAISpec = $map['MasterAISpec'];
        }

        if (isset($map['MasterCU'])) {
            $model->masterCU = $map['MasterCU'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}

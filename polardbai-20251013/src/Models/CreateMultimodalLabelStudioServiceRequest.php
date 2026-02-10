<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class CreateMultimodalLabelStudioServiceRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string[]
     */
    public $datasetIds;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'datasetIds' => 'DatasetIds',
        'password' => 'Password',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->datasetIds)) {
            Model::validateArray($this->datasetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->datasetIds) {
            if (\is_array($this->datasetIds)) {
                $res['DatasetIds'] = [];
                $n1 = 0;
                foreach ($this->datasetIds as $item1) {
                    $res['DatasetIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DatasetIds'])) {
            if (!empty($map['DatasetIds'])) {
                $model->datasetIds = [];
                $n1 = 0;
                foreach ($map['DatasetIds'] as $item1) {
                    $model->datasetIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}

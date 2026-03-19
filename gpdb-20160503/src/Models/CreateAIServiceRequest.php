<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateAIServiceRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $serviceAccount;

    /**
     * @var string
     */
    public $serviceAccountPassword;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'description' => 'Description',
        'securityIPList' => 'SecurityIPList',
        'serviceAccount' => 'ServiceAccount',
        'serviceAccountPassword' => 'ServiceAccountPassword',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->serviceAccount) {
            $res['ServiceAccount'] = $this->serviceAccount;
        }

        if (null !== $this->serviceAccountPassword) {
            $res['ServiceAccountPassword'] = $this->serviceAccountPassword;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['ServiceAccount'])) {
            $model->serviceAccount = $map['ServiceAccount'];
        }

        if (isset($map['ServiceAccountPassword'])) {
            $model->serviceAccountPassword = $map['ServiceAccountPassword'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

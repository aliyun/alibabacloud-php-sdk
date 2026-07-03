<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSupabaseApiKeyResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $anonKey;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $serviceRoleKey;
    protected $_name = [
        'anonKey' => 'AnonKey',
        'DBInstanceName' => 'DBInstanceName',
        'serviceRoleKey' => 'ServiceRoleKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anonKey) {
            $res['AnonKey'] = $this->anonKey;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->serviceRoleKey) {
            $res['ServiceRoleKey'] = $this->serviceRoleKey;
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
        if (isset($map['AnonKey'])) {
            $model->anonKey = $map['AnonKey'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['ServiceRoleKey'])) {
            $model->serviceRoleKey = $map['ServiceRoleKey'];
        }

        return $model;
    }
}

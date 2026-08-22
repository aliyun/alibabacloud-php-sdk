<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeContext0ConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $context0AdminKey;

    /**
     * @var string
     */
    public $context0InstanceName;

    /**
     * @var string
     */
    public $context0OwnerKey;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $openSearchInstanceName;
    protected $_name = [
        'context0AdminKey' => 'Context0AdminKey',
        'context0InstanceName' => 'Context0InstanceName',
        'context0OwnerKey' => 'Context0OwnerKey',
        'DBInstanceName' => 'DBInstanceName',
        'openSearchInstanceName' => 'OpenSearchInstanceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context0AdminKey) {
            $res['Context0AdminKey'] = $this->context0AdminKey;
        }

        if (null !== $this->context0InstanceName) {
            $res['Context0InstanceName'] = $this->context0InstanceName;
        }

        if (null !== $this->context0OwnerKey) {
            $res['Context0OwnerKey'] = $this->context0OwnerKey;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->openSearchInstanceName) {
            $res['OpenSearchInstanceName'] = $this->openSearchInstanceName;
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
        if (isset($map['Context0AdminKey'])) {
            $model->context0AdminKey = $map['Context0AdminKey'];
        }

        if (isset($map['Context0InstanceName'])) {
            $model->context0InstanceName = $map['Context0InstanceName'];
        }

        if (isset($map['Context0OwnerKey'])) {
            $model->context0OwnerKey = $map['Context0OwnerKey'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['OpenSearchInstanceName'])) {
            $model->openSearchInstanceName = $map['OpenSearchInstanceName'];
        }

        return $model;
    }
}

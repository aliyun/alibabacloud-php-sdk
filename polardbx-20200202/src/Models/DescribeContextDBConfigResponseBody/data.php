<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeContextDBConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $contextDBAdminKey;

    /**
     * @var string
     */
    public $contextDBInstanceName;

    /**
     * @var string
     */
    public $contextDBOwnerKey;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $openSearchInstanceName;
    protected $_name = [
        'contextDBAdminKey' => 'ContextDBAdminKey',
        'contextDBInstanceName' => 'ContextDBInstanceName',
        'contextDBOwnerKey' => 'ContextDBOwnerKey',
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
        if (null !== $this->contextDBAdminKey) {
            $res['ContextDBAdminKey'] = $this->contextDBAdminKey;
        }

        if (null !== $this->contextDBInstanceName) {
            $res['ContextDBInstanceName'] = $this->contextDBInstanceName;
        }

        if (null !== $this->contextDBOwnerKey) {
            $res['ContextDBOwnerKey'] = $this->contextDBOwnerKey;
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
        if (isset($map['ContextDBAdminKey'])) {
            $model->contextDBAdminKey = $map['ContextDBAdminKey'];
        }

        if (isset($map['ContextDBInstanceName'])) {
            $model->contextDBInstanceName = $map['ContextDBInstanceName'];
        }

        if (isset($map['ContextDBOwnerKey'])) {
            $model->contextDBOwnerKey = $map['ContextDBOwnerKey'];
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

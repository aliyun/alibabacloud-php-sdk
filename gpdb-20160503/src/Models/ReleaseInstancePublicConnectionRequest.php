<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ReleaseInstancePublicConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $currentConnectionString;

    /**
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'addressType' => 'AddressType',
        'currentConnectionString' => 'CurrentConnectionString',
        'DBInstanceId' => 'DBInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        if (null !== $this->currentConnectionString) {
            $res['CurrentConnectionString'] = $this->currentConnectionString;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        if (isset($map['CurrentConnectionString'])) {
            $model->currentConnectionString = $map['CurrentConnectionString'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}

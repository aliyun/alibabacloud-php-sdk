<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ReleaseInstancePublicConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $currentConnectionString;

    /**
     * @var string
     */
    public $addressType;
    protected $_name = [
        'DBInstanceId'            => 'DBInstanceId',
        'currentConnectionString' => 'CurrentConnectionString',
        'addressType'             => 'AddressType',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('currentConnectionString', $this->currentConnectionString, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->currentConnectionString) {
            $res['CurrentConnectionString'] = $this->currentConnectionString;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseInstancePublicConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['CurrentConnectionString'])) {
            $model->currentConnectionString = $map['CurrentConnectionString'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        return $model;
    }
}

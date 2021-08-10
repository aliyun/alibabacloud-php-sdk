<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityIpsRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $DBInstanceIPArrayName;

    /**
     * @var string
     */
    public $DBInstanceIPArrayAttribute;
    protected $_name = [
        'DBInstanceId'               => 'DBInstanceId',
        'securityIPList'             => 'SecurityIPList',
        'DBInstanceIPArrayName'      => 'DBInstanceIPArrayName',
        'DBInstanceIPArrayAttribute' => 'DBInstanceIPArrayAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->DBInstanceIPArrayName) {
            $res['DBInstanceIPArrayName'] = $this->DBInstanceIPArrayName;
        }
        if (null !== $this->DBInstanceIPArrayAttribute) {
            $res['DBInstanceIPArrayAttribute'] = $this->DBInstanceIPArrayAttribute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['DBInstanceIPArrayName'])) {
            $model->DBInstanceIPArrayName = $map['DBInstanceIPArrayName'];
        }
        if (isset($map['DBInstanceIPArrayAttribute'])) {
            $model->DBInstanceIPArrayAttribute = $map['DBInstanceIPArrayAttribute'];
        }

        return $model;
    }
}

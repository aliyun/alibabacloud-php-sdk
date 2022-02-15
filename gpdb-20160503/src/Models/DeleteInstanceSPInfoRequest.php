<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceSPInfoRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceInfos;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'DBInstanceInfos' => 'DBInstanceInfos',
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
        if (null !== $this->DBInstanceInfos) {
            $res['DBInstanceInfos'] = $this->DBInstanceInfos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstanceSPInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceInfos'])) {
            $model->DBInstanceInfos = $map['DBInstanceInfos'];
        }

        return $model;
    }
}

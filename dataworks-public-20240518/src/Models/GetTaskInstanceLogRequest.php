<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetTaskInstanceLogRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The sequence number of an instance run. Minimum value: 1. By default, the latest run is used.
     *
     * @example 1
     *
     * @var int
     */
    public $runNumber;
    protected $_name = [
        'id'        => 'Id',
        'runNumber' => 'RunNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->runNumber) {
            $res['RunNumber'] = $this->runNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskInstanceLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RunNumber'])) {
            $model->runNumber = $map['RunNumber'];
        }

        return $model;
    }
}

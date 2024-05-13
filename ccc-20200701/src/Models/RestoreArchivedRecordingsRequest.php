<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class RestoreArchivedRecordingsRequest extends Model
{
    /**
     * @example [\\"job-216750038017142784\\"]
     *
     * @var string
     */
    public $contactIds;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactIds' => 'ContactIds',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactIds) {
            $res['ContactIds'] = $this->contactIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreArchivedRecordingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactIds'])) {
            $model->contactIds = $map['ContactIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

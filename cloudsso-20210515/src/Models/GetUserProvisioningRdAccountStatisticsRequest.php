<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class GetUserProvisioningRdAccountStatisticsRequest extends Model
{
    /**
     * @description The ID of the resource directory.
     *
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The ID of the member in the resource directory.
     *
     * @example 1743382******
     *
     * @var string
     */
    public $rdMemberId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'rdMemberId'  => 'RdMemberId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->rdMemberId) {
            $res['RdMemberId'] = $this->rdMemberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserProvisioningRdAccountStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['RdMemberId'])) {
            $model->rdMemberId = $map['RdMemberId'];
        }

        return $model;
    }
}

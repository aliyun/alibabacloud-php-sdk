<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebLockRefreshRequest extends Model
{
    /**
     * @description The UUID of the server for which you want to refresh the status of the web tamper proofing feature.
     *
     * >  You can call the [DescribeWebLockBindList](~~DescribeWebLockBindList~~) operation to query the servers for which the web tamper proofing feature is enabled.
     *
     * @example 55c0f41b-3093-47a7-8eae-02d3a584****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebLockRefreshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

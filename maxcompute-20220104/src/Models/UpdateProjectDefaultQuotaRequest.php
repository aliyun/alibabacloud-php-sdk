<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectDefaultQuotaRequest extends Model
{
    /**
     * @description The default computing quota that is used to allocate computing resources, the jobs that are initiated by this project consume the computing resources in the default quota.
     *
     * @example os_PayAsYouGoQuota
     *
     * @var string
     */
    public $quota;
    protected $_name = [
        'quota' => 'quota',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->quota) {
            $res['quota'] = $this->quota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectDefaultQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['quota'])) {
            $model->quota = $map['quota'];
        }

        return $model;
    }
}

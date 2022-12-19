<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateBackupPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class backupPolicy extends Model
{
    /**
     * @description The ID of the anti-ransomware policy.
     *
     * @example 1301575
     *
     * @var string
     */
    public $id;

    /**
     * @description The status of the anti-ransomware policy. Valid values:
     *
     *   **enabled**
     *   **disabled**
     *
     * >  After you create an anti-ransomware policy, the policy is enabled by default.
     * @example enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'id'     => 'Id',
        'status' => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

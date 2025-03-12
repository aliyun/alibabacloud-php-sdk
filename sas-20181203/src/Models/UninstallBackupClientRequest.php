<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UninstallBackupClientRequest extends Model
{
    /**
     * @description The version of the anti-ransomware policy. You can call the [DescribeBackupPolicies](~~DescribeBackupPolicies~~) operation to query the versions of anti-ransomware policies. Valid values:
     *
     *   **1.0.0**
     *   **2.0.0**
     *
     * This parameter is required.
     * @example 2.0.0
     *
     * @var string
     */
    public $policyVersion;

    /**
     * @description The UUID of the server from which you want to uninstall the anti-ransomware agent.
     *
     * > You must specify at least one of the UuidList and Uuid parameters.
     * @example D0D6E6E4-CB8C-4897-B852-46AEFDA0****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The UUIDs of the servers from which you want to uninstall the anti-ransomware agent.
     *
     * > You must specify at least one of the UuidList and Uuid parameters.
     * @example ["D0D6E6E4-CB8C-4897-B852-46AEFDA0****", "3bb30859-b3b5-4f28-868f-b0892c98****"]
     *
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'policyVersion' => 'PolicyVersion',
        'uuid'          => 'Uuid',
        'uuidList'      => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UninstallBackupClientRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}

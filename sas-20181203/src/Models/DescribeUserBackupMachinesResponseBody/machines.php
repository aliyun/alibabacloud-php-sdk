<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBackupMachinesResponseBody;

use AlibabaCloud\Tea\Model;

class machines extends Model
{
    /**
     * @description The ID of the anti-ransomware policy that is applied to the server.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the anti-ransomware policy that is applied to the server.
     *
     * @example policy_name_A
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The UUID of the server to which the anti-ransomware policy is applied.
     *
     * @example D0D6E6E4-CB8C-4897-B852-46AEFDA0****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'id'         => 'Id',
        'policyName' => 'PolicyName',
        'uuid'       => 'Uuid',
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
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

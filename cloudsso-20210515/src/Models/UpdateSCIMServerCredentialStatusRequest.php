<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateSCIMServerCredentialStatusRequest extends Model
{
    /**
     * @description The ID of the SCIM credential.
     *
     * @example scimcred-004whl0kvfwcypbi****
     *
     * @var string
     */
    public $credentialId;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The new status of the SCIM credential. Valid values:
     *
     *   Enabled: The SCIM credential is enabled.
     *   Disabled: The SCIM credential is disabled.
     *
     * @example Disabled
     *
     * @var string
     */
    public $newStatus;
    protected $_name = [
        'credentialId' => 'CredentialId',
        'directoryId'  => 'DirectoryId',
        'newStatus'    => 'NewStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->newStatus) {
            $res['NewStatus'] = $this->newStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSCIMServerCredentialStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['NewStatus'])) {
            $model->newStatus = $map['NewStatus'];
        }

        return $model;
    }
}

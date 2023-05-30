<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateSecretVersionStageRequest extends Model
{
    /**
     * @description The version from which you want to remove the specified stage label.
     *
     * >  You must specify at least one of the RemoveFromVersion and MoveToVersion parameters.
     * @example 002
     *
     * @var string
     */
    public $moveToVersion;

    /**
     * @description The specified stage label. Valid values:
     *
     *   ACSCurrent
     *   ACSPrevious
     *   Custom stage label
     *
     * @example 001
     *
     * @var string
     */
    public $removeFromVersion;

    /**
     * @description The operation that you want to perform. Set the value to **UpdateSecretVersionStage**.
     *
     * @example secret001
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The name of the secret.
     *
     * @example ACSCurrent
     *
     * @var string
     */
    public $versionStage;
    protected $_name = [
        'moveToVersion'     => 'MoveToVersion',
        'removeFromVersion' => 'RemoveFromVersion',
        'secretName'        => 'SecretName',
        'versionStage'      => 'VersionStage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moveToVersion) {
            $res['MoveToVersion'] = $this->moveToVersion;
        }
        if (null !== $this->removeFromVersion) {
            $res['RemoveFromVersion'] = $this->removeFromVersion;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->versionStage) {
            $res['VersionStage'] = $this->versionStage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecretVersionStageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MoveToVersion'])) {
            $model->moveToVersion = $map['MoveToVersion'];
        }
        if (isset($map['RemoveFromVersion'])) {
            $model->removeFromVersion = $map['RemoveFromVersion'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['VersionStage'])) {
            $model->versionStage = $map['VersionStage'];
        }

        return $model;
    }
}

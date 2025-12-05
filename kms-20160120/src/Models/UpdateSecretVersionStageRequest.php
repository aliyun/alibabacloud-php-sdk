<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class UpdateSecretVersionStageRequest extends Model
{
    /**
     * @var string
     */
    public $moveToVersion;

    /**
     * @var string
     */
    public $removeFromVersion;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $versionStage;
    protected $_name = [
        'moveToVersion' => 'MoveToVersion',
        'removeFromVersion' => 'RemoveFromVersion',
        'secretName' => 'SecretName',
        'versionStage' => 'VersionStage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

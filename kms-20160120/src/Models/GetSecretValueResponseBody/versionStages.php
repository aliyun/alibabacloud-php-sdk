<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretValueResponseBody;

use AlibabaCloud\Tea\Model;

class versionStages extends Model
{
    /**
     * @var string[]
     */
    public $versionStage;
    protected $_name = [
        'versionStage' => 'VersionStage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionStage) {
            $res['VersionStage'] = $this->versionStage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionStages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionStage'])) {
            if (!empty($map['VersionStage'])) {
                $model->versionStage = $map['VersionStage'];
            }
        }

        return $model;
    }
}

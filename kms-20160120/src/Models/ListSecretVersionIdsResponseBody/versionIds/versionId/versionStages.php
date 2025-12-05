<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponseBody\versionIds\versionId;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->versionStage)) {
            Model::validateArray($this->versionStage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->versionStage) {
            if (\is_array($this->versionStage)) {
                $res['VersionStage'] = [];
                $n1 = 0;
                foreach ($this->versionStage as $item1) {
                    $res['VersionStage'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['VersionStage'])) {
            if (!empty($map['VersionStage'])) {
                $model->versionStage = [];
                $n1 = 0;
                foreach ($map['VersionStage'] as $item1) {
                    $model->versionStage[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

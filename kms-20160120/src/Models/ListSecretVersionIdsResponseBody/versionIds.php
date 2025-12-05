<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponseBody\versionIds\versionId;

class versionIds extends Model
{
    /**
     * @var versionId[]
     */
    public $versionId;
    protected $_name = [
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (\is_array($this->versionId)) {
            Model::validateArray($this->versionId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->versionId) {
            if (\is_array($this->versionId)) {
                $res['VersionId'] = [];
                $n1 = 0;
                foreach ($this->versionId as $item1) {
                    $res['VersionId'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VersionId'])) {
            if (!empty($map['VersionId'])) {
                $model->versionId = [];
                $n1 = 0;
                foreach ($map['VersionId'] as $item1) {
                    $model->versionId[$n1] = versionId::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponseBody;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponseBody\versionIds\versionId;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionId) {
            $res['VersionId'] = [];
            if (null !== $this->versionId && \is_array($this->versionId)) {
                $n = 0;
                foreach ($this->versionId as $item) {
                    $res['VersionId'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionId'])) {
            if (!empty($map['VersionId'])) {
                $model->versionId = [];
                $n                = 0;
                foreach ($map['VersionId'] as $item) {
                    $model->versionId[$n++] = null !== $item ? versionId::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

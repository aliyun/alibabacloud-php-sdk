<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponseBody;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponseBody\keyVersions\keyVersion;
use AlibabaCloud\Tea\Model;

class keyVersions extends Model
{
    /**
     * @var keyVersion[]
     */
    public $keyVersion;
    protected $_name = [
        'keyVersion' => 'KeyVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyVersion) {
            $res['KeyVersion'] = [];
            if (null !== $this->keyVersion && \is_array($this->keyVersion)) {
                $n = 0;
                foreach ($this->keyVersion as $item) {
                    $res['KeyVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyVersion'])) {
            if (!empty($map['KeyVersion'])) {
                $model->keyVersion = [];
                $n = 0;
                foreach ($map['KeyVersion'] as $item) {
                    $model->keyVersion[$n++] = null !== $item ? keyVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKmsInstancesResponseBody;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListKmsInstancesResponseBody\kmsInstances\kmsInstance;
use AlibabaCloud\Tea\Model;

class kmsInstances extends Model
{
    /**
     * @var kmsInstance[]
     */
    public $kmsInstance;
    protected $_name = [
        'kmsInstance' => 'KmsInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kmsInstance) {
            $res['KmsInstance'] = [];
            if (null !== $this->kmsInstance && \is_array($this->kmsInstance)) {
                $n = 0;
                foreach ($this->kmsInstance as $item) {
                    $res['KmsInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kmsInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KmsInstance'])) {
            if (!empty($map['KmsInstance'])) {
                $model->kmsInstance = [];
                $n                  = 0;
                foreach ($map['KmsInstance'] as $item) {
                    $model->kmsInstance[$n++] = null !== $item ? kmsInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

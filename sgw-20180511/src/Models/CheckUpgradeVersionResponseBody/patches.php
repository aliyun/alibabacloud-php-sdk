<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\CheckUpgradeVersionResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckUpgradeVersionResponseBody\patches\patch;
use AlibabaCloud\Tea\Model;

class patches extends Model
{
    /**
     * @var patch[]
     */
    public $patch;
    protected $_name = [
        'patch' => 'Patch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->patch) {
            $res['Patch'] = [];
            if (null !== $this->patch && \is_array($this->patch)) {
                $n = 0;
                foreach ($this->patch as $item) {
                    $res['Patch'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return patches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Patch'])) {
            if (!empty($map['Patch'])) {
                $model->patch = [];
                $n            = 0;
                foreach ($map['Patch'] as $item) {
                    $model->patch[$n++] = null !== $item ? patch::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

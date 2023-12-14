<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayBlockVolumesResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayBlockVolumesResponseBody\blockVolumes\blockVolume;
use AlibabaCloud\Tea\Model;

class blockVolumes extends Model
{
    /**
     * @var blockVolume[]
     */
    public $blockVolume;
    protected $_name = [
        'blockVolume' => 'BlockVolume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockVolume) {
            $res['BlockVolume'] = [];
            if (null !== $this->blockVolume && \is_array($this->blockVolume)) {
                $n = 0;
                foreach ($this->blockVolume as $item) {
                    $res['BlockVolume'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockVolumes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockVolume'])) {
            if (!empty($map['BlockVolume'])) {
                $model->blockVolume = [];
                $n                  = 0;
                foreach ($map['BlockVolume'] as $item) {
                    $model->blockVolume[$n++] = null !== $item ? blockVolume::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

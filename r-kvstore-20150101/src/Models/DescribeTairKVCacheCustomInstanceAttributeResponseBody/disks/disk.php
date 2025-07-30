<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheCustomInstanceAttributeResponseBody\disks;

use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @example d-5v1aggi3ffoxufb57**
     *
     * @var string
     */
    public $diskId;

    /**
     * @example 100
     *
     * @var string
     */
    public $size;

    /**
     * @example data
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'diskId' => 'DiskId',
        'size' => 'Size',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

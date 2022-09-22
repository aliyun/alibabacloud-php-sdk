<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDisksResponseBody;

use AlibabaCloud\Tea\Model;

class diskId extends Model
{
    /**
     * @var string[]
     */
    public $diskIds;
    protected $_name = [
        'diskIds' => 'DiskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskIds) {
            $res['DiskIds'] = $this->diskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskIds'])) {
            if (!empty($map['DiskIds'])) {
                $model->diskIds = $map['DiskIds'];
            }
        }

        return $model;
    }
}

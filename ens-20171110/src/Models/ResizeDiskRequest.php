<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ResizeDiskRequest extends Model
{
    /**
     * @example d-5tzm9wnhzlhjzcbtxo465****
     *
     * @var string
     */
    public $diskId;

    /**
     * @example 100
     *
     * @var string
     */
    public $newSize;
    protected $_name = [
        'diskId'  => 'DiskId',
        'newSize' => 'NewSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->newSize) {
            $res['NewSize'] = $this->newSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['NewSize'])) {
            $model->newSize = $map['NewSize'];
        }

        return $model;
    }
}

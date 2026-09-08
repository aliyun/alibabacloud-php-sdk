<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ResizeDiskParameters extends Model
{
    /**
     * @var string
     */
    public $newDiskSize;
    protected $_name = [
        'newDiskSize' => 'NewDiskSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newDiskSize) {
            $res['NewDiskSize'] = $this->newDiskSize;
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
        if (isset($map['NewDiskSize'])) {
            $model->newDiskSize = $map['NewDiskSize'];
        }

        return $model;
    }
}

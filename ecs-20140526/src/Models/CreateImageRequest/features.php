<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest;

use AlibabaCloud\Dara\Model;

class features extends Model
{
    /**
     * @var string
     */
    public $imdsSupport;
    protected $_name = [
        'imdsSupport' => 'ImdsSupport',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imdsSupport) {
            $res['ImdsSupport'] = $this->imdsSupport;
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
        if (isset($map['ImdsSupport'])) {
            $model->imdsSupport = $map['ImdsSupport'];
        }

        return $model;
    }
}

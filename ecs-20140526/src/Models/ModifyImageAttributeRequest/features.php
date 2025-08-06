<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageAttributeRequest;

use AlibabaCloud\Dara\Model;

class features extends Model
{
    /**
     * @var string
     */
    public $imdsSupport;

    /**
     * @var string
     */
    public $nvmeSupport;
    protected $_name = [
        'imdsSupport' => 'ImdsSupport',
        'nvmeSupport' => 'NvmeSupport',
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

        if (null !== $this->nvmeSupport) {
            $res['NvmeSupport'] = $this->nvmeSupport;
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

        if (isset($map['NvmeSupport'])) {
            $model->nvmeSupport = $map['NvmeSupport'];
        }

        return $model;
    }
}

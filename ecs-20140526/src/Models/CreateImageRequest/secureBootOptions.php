<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest;

use AlibabaCloud\Dara\Model;

class secureBootOptions extends Model
{
    /**
     * @var string
     */
    public $secureBootSupport;
    protected $_name = [
        'secureBootSupport' => 'SecureBootSupport',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secureBootSupport) {
            $res['SecureBootSupport'] = $this->secureBootSupport;
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
        if (isset($map['SecureBootSupport'])) {
            $model->secureBootSupport = $map['SecureBootSupport'];
        }

        return $model;
    }
}

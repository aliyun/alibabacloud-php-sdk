<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class AclEntryConfig extends Model
{
    /**
     * @var string
     */
    public $entry;
    protected $_name = [
        'entry' => 'entry',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entry) {
            $res['entry'] = $this->entry;
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
        if (isset($map['entry'])) {
            $model->entry = $map['entry'];
        }

        return $model;
    }
}

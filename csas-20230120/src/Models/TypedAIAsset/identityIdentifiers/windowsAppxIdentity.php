<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\identityIdentifiers;

use AlibabaCloud\Dara\Model;

class windowsAppxIdentity extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $publisher;
    protected $_name = [
        'name' => 'name',
        'publisher' => 'publisher',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->publisher) {
            $res['publisher'] = $this->publisher;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['publisher'])) {
            $model->publisher = $map['publisher'];
        }

        return $model;
    }
}

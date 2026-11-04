<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetServiceExtensionsResponseBody\serviceExtensions;

use AlibabaCloud\Dara\Model;

class serviceExtension extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $number;
    protected $_name = [
        'name' => 'Name',
        'number' => 'Number',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        return $model;
    }
}

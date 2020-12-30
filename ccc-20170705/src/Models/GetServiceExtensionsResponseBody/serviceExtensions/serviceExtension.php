<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetServiceExtensionsResponseBody\serviceExtensions;

use AlibabaCloud\Tea\Model;

class serviceExtension extends Model
{
    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'number' => 'Number',
        'name'   => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceExtension
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

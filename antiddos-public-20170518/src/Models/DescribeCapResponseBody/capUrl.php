<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeCapResponseBody;

use AlibabaCloud\Dara\Model;

class capUrl extends Model
{
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHeadersResponseBody;

use AlibabaCloud\Dara\Model;

class customHeader extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $headers;
    protected $_name = [
        'domain' => 'Domain',
        'headers' => 'Headers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }

        return $model;
    }
}

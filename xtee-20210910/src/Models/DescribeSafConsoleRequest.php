<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeSafConsoleRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'lang' => 'Lang',
        'content' => 'content',
        'service' => 'service',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->service) {
            $res['service'] = $this->service;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['service'])) {
            $model->service = $map['service'];
        }

        return $model;
    }
}

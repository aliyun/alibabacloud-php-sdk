<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @var string
     */
    public $service;
    protected $_name = [
        'lang'    => 'Lang',
        'content' => 'content',
        'service' => 'service',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeSafConsoleRequest
     */
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

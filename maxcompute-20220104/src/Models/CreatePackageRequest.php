<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class CreatePackageRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var bool
     */
    public $isInstall;
    protected $_name = [
        'body' => 'body',
        'isInstall' => 'isInstall',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        if (null !== $this->isInstall) {
            $res['isInstall'] = $this->isInstall;
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
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        if (isset($map['isInstall'])) {
            $model->isInstall = $map['isInstall'];
        }

        return $model;
    }
}

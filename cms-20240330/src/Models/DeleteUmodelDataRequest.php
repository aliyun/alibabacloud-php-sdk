<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteUmodelDataRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'domain' => 'domain',
        'kind' => 'kind',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}

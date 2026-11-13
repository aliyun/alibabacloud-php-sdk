<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ModelApiDomainInfo extends Model
{
    /**
     * @var bool
     */
    public $default;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainScope;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'default' => 'default',
        'domainId' => 'domainId',
        'domainScope' => 'domainScope',
        'name' => 'name',
        'protocol' => 'protocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->default) {
            $res['default'] = $this->default;
        }

        if (null !== $this->domainId) {
            $res['domainId'] = $this->domainId;
        }

        if (null !== $this->domainScope) {
            $res['domainScope'] = $this->domainScope;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
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
        if (isset($map['default'])) {
            $model->default = $map['default'];
        }

        if (isset($map['domainId'])) {
            $model->domainId = $map['domainId'];
        }

        if (isset($map['domainScope'])) {
            $model->domainScope = $map['domainScope'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        return $model;
    }
}

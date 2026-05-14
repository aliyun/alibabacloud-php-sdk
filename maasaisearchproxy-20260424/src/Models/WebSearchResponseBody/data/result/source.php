<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models\WebSearchResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $favicon;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'domain' => 'domain',
        'favicon' => 'favicon',
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

        if (null !== $this->favicon) {
            $res['favicon'] = $this->favicon;
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

        if (isset($map['favicon'])) {
            $model->favicon = $map['favicon'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}

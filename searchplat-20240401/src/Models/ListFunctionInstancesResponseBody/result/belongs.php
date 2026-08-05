<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListFunctionInstancesResponseBody\result;

use AlibabaCloud\Dara\Model;

class belongs extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $language;
    protected $_name = [
        'category' => 'category',
        'domain' => 'domain',
        'language' => 'language',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        return $model;
    }
}

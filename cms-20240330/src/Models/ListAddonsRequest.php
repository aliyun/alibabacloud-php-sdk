<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListAddonsRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $regexp;

    /**
     * @var string
     */
    public $search;
    protected $_name = [
        'aliyunLang' => 'aliyunLang',
        'category' => 'category',
        'regexp' => 'regexp',
        'search' => 'search',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['aliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->regexp) {
            $res['regexp'] = $this->regexp;
        }

        if (null !== $this->search) {
            $res['search'] = $this->search;
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
        if (isset($map['aliyunLang'])) {
            $model->aliyunLang = $map['aliyunLang'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['regexp'])) {
            $model->regexp = $map['regexp'];
        }

        if (isset($map['search'])) {
            $model->search = $map['search'];
        }

        return $model;
    }
}

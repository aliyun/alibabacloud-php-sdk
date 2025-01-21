<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

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
    public $regionId;
    /**
     * @var string
     */
    public $search;
    protected $_name = [
        'aliyunLang' => 'AliyunLang',
        'category'   => 'Category',
        'regexp'     => 'Regexp',
        'regionId'   => 'RegionId',
        'search'     => 'Search',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->regexp) {
            $res['Regexp'] = $this->regexp;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->search) {
            $res['Search'] = $this->search;
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
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Regexp'])) {
            $model->regexp = $map['Regexp'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }

        return $model;
    }
}

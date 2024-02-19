<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListAddonsRequest extends Model
{
    /**
     * @description Language,the default language is Chinese.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description Category filter.
     *
     * @example database
     *
     * @var string
     */
    public $category;

    /**
     * @description Whether to enable regular matching.
     *
     * @example false
     *
     * @var bool
     */
    public $regexp;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description A query field can be queried by name or description.
     *
     * @example mysql
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListAddonsRequest
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListProductsResponseBody;

use AlibabaCloud\Dara\Model;

class products extends Model
{
    /**
     * @var string
     */
    public $category2Name;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $defaultVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $shortName;

    /**
     * @var string
     */
    public $style;

    /**
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'category2Name' => 'category2Name',
        'categoryName' => 'categoryName',
        'code' => 'code',
        'defaultVersion' => 'defaultVersion',
        'description' => 'description',
        'group' => 'group',
        'name' => 'name',
        'shortName' => 'shortName',
        'style' => 'style',
        'versions' => 'versions',
    ];

    public function validate()
    {
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category2Name) {
            $res['category2Name'] = $this->category2Name;
        }

        if (null !== $this->categoryName) {
            $res['categoryName'] = $this->categoryName;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->defaultVersion) {
            $res['defaultVersion'] = $this->defaultVersion;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->shortName) {
            $res['shortName'] = $this->shortName;
        }

        if (null !== $this->style) {
            $res['style'] = $this->style;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['category2Name'])) {
            $model->category2Name = $map['category2Name'];
        }

        if (isset($map['categoryName'])) {
            $model->categoryName = $map['categoryName'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['defaultVersion'])) {
            $model->defaultVersion = $map['defaultVersion'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['group'])) {
            $model->group = $map['group'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['shortName'])) {
            $model->shortName = $map['shortName'];
        }

        if (isset($map['style'])) {
            $model->style = $map['style'];
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponseBody\additionalPackages\additionalPackageInfos\versions;

class additionalPackageInfos extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $icon;
    /**
     * @var string
     */
    public $name;
    /**
     * @var versions
     */
    public $versions;
    protected $_name = [
        'category'    => 'Category',
        'description' => 'Description',
        'icon'        => 'Icon',
        'name'        => 'Name',
        'versions'    => 'Versions',
    ];

    public function validate()
    {
        if (null !== $this->versions) {
            $this->versions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->versions) {
            $res['Versions'] = null !== $this->versions ? $this->versions->toArray($noStream) : $this->versions;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Versions'])) {
            $model->versions = versions::fromMap($map['Versions']);
        }

        return $model;
    }
}

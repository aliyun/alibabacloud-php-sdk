<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationSpecsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $organizationSpecsName;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'enable'                => 'Enable',
        'organizationSpecsName' => 'OrganizationSpecsName',
        'title'                 => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->organizationSpecsName) {
            $res['OrganizationSpecsName'] = $this->organizationSpecsName;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['OrganizationSpecsName'])) {
            $model->organizationSpecsName = $map['OrganizationSpecsName'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationSpecsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $organizationSpecsName;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'title'                 => 'Title',
        'organizationSpecsName' => 'OrganizationSpecsName',
        'enable'                => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->organizationSpecsName) {
            $res['OrganizationSpecsName'] = $this->organizationSpecsName;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['OrganizationSpecsName'])) {
            $model->organizationSpecsName = $map['OrganizationSpecsName'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}

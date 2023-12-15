<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationSpecsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example basic
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'enable' => 'Enable',
        'name'   => 'Name',
        'title'  => 'Title',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

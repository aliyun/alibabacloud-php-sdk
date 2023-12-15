<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\CreateEcosphereRequest;

use AlibabaCloud\Tea\Model;

class organization extends Model
{
    /**
     * @example string
     *
     * @var string
     */
    public $description;

    /**
     * @example domain1
     *
     * @var string
     */
    public $domain;

    /**
     * @example name1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'domain'      => 'Domain',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return organization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

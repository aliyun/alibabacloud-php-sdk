<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationAccessPointRequest extends Model
{
    /**
     * @description The description.
     *
     * @example aap description
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the AAP that you want to update.
     *
     * This parameter is required.
     * @example aap_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The permission policy that you want to update.
     * > You can associate up to three permission policies with each AAP.
     * @example ["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]
     *
     * @var string
     */
    public $policies;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'policies'    => 'Policies',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policies) {
            $res['Policies'] = $this->policies;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationAccessPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policies'])) {
            $model->policies = $map['Policies'];
        }

        return $model;
    }
}

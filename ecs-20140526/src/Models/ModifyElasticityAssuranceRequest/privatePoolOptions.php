<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyElasticityAssuranceRequest;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @description The ID of the elasticity assurance.
     *
     * This parameter is required.
     *
     * @example eap-bp67acfmxazb4****
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the elasticity assurance. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with http:// or https://. The name can contain digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example eapTestName
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privatePoolOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

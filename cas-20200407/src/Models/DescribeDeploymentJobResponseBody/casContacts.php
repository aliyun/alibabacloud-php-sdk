<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\DescribeDeploymentJobResponseBody;

use AlibabaCloud\Tea\Model;

class casContacts extends Model
{
    /**
     * @description The email address of the contact.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The ID of the contact.
     *
     * @example 3304
     *
     * @var string
     */
    public $id;

    /**
     * @description The phone number of the contact.
     *
     * @example 139****0000
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The name of the contact.
     *
     * @example zhangsan
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'email' => 'Email',
        'id' => 'Id',
        'mobile' => 'Mobile',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return casContacts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

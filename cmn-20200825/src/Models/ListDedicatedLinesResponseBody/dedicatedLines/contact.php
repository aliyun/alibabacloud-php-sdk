<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListDedicatedLinesResponseBody\dedicatedLines;

use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example example@aliyun.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 张三
     *
     * @var string
     */
    public $name;

    /**
     * @example 133xxxxxxx
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'description' => 'Description',
        'email'       => 'Email',
        'name'        => 'Name',
        'phone'       => 'Phone',
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
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}

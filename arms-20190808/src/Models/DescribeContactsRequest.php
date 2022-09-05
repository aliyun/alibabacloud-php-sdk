<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribeContactsRequest extends Model
{
    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'contactName' => 'ContactName',
        'email'       => 'Email',
        'page'        => 'Page',
        'phone'       => 'Phone',
        'size'        => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContactsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

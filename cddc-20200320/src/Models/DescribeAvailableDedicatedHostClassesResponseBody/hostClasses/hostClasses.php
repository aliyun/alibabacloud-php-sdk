<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeAvailableDedicatedHostClassesResponseBody\hostClasses;

use AlibabaCloud\Tea\Model;

class hostClasses extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hostClassName;
    protected $_name = [
        'description'   => 'Description',
        'hostClassName' => 'HostClassName',
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
        if (null !== $this->hostClassName) {
            $res['HostClassName'] = $this->hostClassName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostClasses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HostClassName'])) {
            $model->hostClassName = $map['HostClassName'];
        }

        return $model;
    }
}

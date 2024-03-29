<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\applications;

use AlibabaCloud\Tea\Model;

class applicationInfo extends Model
{
    /**
     * @description The name of the software.
     *
     * @example openmpi
     *
     * @var string
     */
    public $name;

    /**
     * @description The tag of the software.
     *
     * @example OpenMPI_1.8.7
     *
     * @var string
     */
    public $tag;

    /**
     * @description The version of the software.
     *
     * @example 1.10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'name'    => 'Name',
        'tag'     => 'Tag',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

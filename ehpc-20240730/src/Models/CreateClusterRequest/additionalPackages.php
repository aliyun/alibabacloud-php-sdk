<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class additionalPackages extends Model
{
    /**
     * @description The name of the software that you want to install in the cluster.
     *
     * @example mpich
     *
     * @var string
     */
    public $name;

    /**
     * @description The version of the software that you want to install in the cluster.
     *
     * @example 4.0.3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'name'    => 'Name',
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return additionalPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

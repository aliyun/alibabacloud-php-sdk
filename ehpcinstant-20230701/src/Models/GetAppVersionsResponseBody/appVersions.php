<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetAppVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class appVersions extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example m-f8z0dfa96luomqly****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example V-Ray
     *
     * @var string
     */
    public $name;

    /**
     * @example v1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'imageId' => 'ImageId',
        'name' => 'Name',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
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
     * @return appVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

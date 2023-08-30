<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The image provider.
     *
     * @example https://selfs****e.console.aliyun.com/ticket/createIndex
     *
     * @var string
     */
    public $imageContact;

    /**
     * @description The URL of the image icon.
     *
     * @example https://img.alicdn.com/imgextra/i3/O****1vdh9651ReKqWNMI2I_!!6000000002136****-24-24.svg
     *
     * @var string
     */
    public $imageIconUrl;

    /**
     * @description The image name.
     *
     * @example test-custom-1686536882356
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The image type. Valid values:
     *
     *   system
     *   app
     *   custom
     *
     * @example system
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The image tag.
     *
     * @example V3.5
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description The OS.
     *
     * @example windows
     *
     * @var string
     */
    public $osType;
    protected $_name = [
        'imageContact' => 'ImageContact',
        'imageIconUrl' => 'ImageIconUrl',
        'imageName'    => 'ImageName',
        'imageType'    => 'ImageType',
        'imageVersion' => 'ImageVersion',
        'osType'       => 'OsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageContact) {
            $res['ImageContact'] = $this->imageContact;
        }
        if (null !== $this->imageIconUrl) {
            $res['ImageIconUrl'] = $this->imageIconUrl;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageContact'])) {
            $model->imageContact = $map['ImageContact'];
        }
        if (isset($map['ImageIconUrl'])) {
            $model->imageIconUrl = $map['ImageIconUrl'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $imageContact;

    /**
     * @var string
     */
    public $imageIconUrl;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageVersion;

    /**
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\GetImageResponseBody\image;

use AlibabaCloud\Tea\Model;

class VMImageSpec extends Model
{
    /**
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @example m-uf60twafjtaart******
     *
     * @var string
     */
    public $imageId;

    /**
     * @example CentOS  7.6 64 bit
     *
     * @var string
     */
    public $osTag;

    /**
     * @example CentOS
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'architecture' => 'Architecture',
        'imageId'      => 'ImageId',
        'osTag'        => 'OsTag',
        'platform'     => 'Platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VMImageSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        return $model;
    }
}

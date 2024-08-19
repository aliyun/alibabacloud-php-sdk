<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class AddImages2LibRequest extends Model
{
    /**
     * @example upload/ea7a98f9-f8bd-4905-a79b-963c9da419c5.jpg
     *
     * @var string
     */
    public $imgUrl;

    /**
     * @example xxx
     *
     * @var string
     */
    public $libId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'imgUrl'   => 'ImgUrl',
        'libId'    => 'LibId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imgUrl) {
            $res['ImgUrl'] = $this->imgUrl;
        }
        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImages2LibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImgUrl'])) {
            $model->imgUrl = $map['ImgUrl'];
        }
        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

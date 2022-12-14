<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class VerifyFaceMaskRequest extends Model
{
    /**
     * @example iVBORw0KGgoAAAANSUhEUgAAAoAAAAHJCAIAAACaEB9NAAEAAElEQVR4nNT9Wb****
     *
     * @var int[]
     */
    public $imageData;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/ceshi/VerifyFaceMaskA.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example iVBORw0KGgoAAAANSUhEUgAAAoAAAAHJCAIAAACaEB9NAAEAAElEQVR4nNT9WbA****
     *
     * @var int[]
     */
    public $refData;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/ceshi/VerifyFaceMaskB.jpg
     *
     * @var string
     */
    public $refUrl;
    protected $_name = [
        'imageData' => 'ImageData',
        'imageURL'  => 'ImageURL',
        'refData'   => 'RefData',
        'refUrl'    => 'RefUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageData) {
            $res['ImageData'] = $this->imageData;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->refData) {
            $res['RefData'] = $this->refData;
        }
        if (null !== $this->refUrl) {
            $res['RefUrl'] = $this->refUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyFaceMaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageData'])) {
            $model->imageData = $map['ImageData'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['RefData'])) {
            $model->refData = $map['RefData'];
        }
        if (isset($map['RefUrl'])) {
            $model->refUrl = $map['RefUrl'];
        }

        return $model;
    }
}

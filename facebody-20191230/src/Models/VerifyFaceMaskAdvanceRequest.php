<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class VerifyFaceMaskAdvanceRequest extends Model
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
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example iVBORw0KGgoAAAANSUhEUgAAAoAAAAHJCAIAAACaEB9NAAEAAElEQVR4nNT9WbA****
     *
     * @var int[]
     */
    public $refData;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/ceshi/VerifyFaceMaskB.jpg
     *
     * @var Stream
     */
    public $refUrlObject;
    protected $_name = [
        'imageData'      => 'ImageData',
        'imageURLObject' => 'ImageURL',
        'refData'        => 'RefData',
        'refUrlObject'   => 'RefUrl',
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
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->refData) {
            $res['RefData'] = $this->refData;
        }
        if (null !== $this->refUrlObject) {
            $res['RefUrl'] = $this->refUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyFaceMaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageData'])) {
            $model->imageData = $map['ImageData'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['RefData'])) {
            $model->refData = $map['RefData'];
        }
        if (isset($map['RefUrl'])) {
            $model->refUrlObject = $map['RefUrl'];
        }

        return $model;
    }
}

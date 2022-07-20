<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob\imageCensorResults;

use AlibabaCloud\Tea\Model;

class imageCensorResult extends Model
{
    /**
     * @var string
     */
    public $imageBucket;

    /**
     * @var string
     */
    public $imageLocation;

    /**
     * @var string
     */
    public $imageObject;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'imageBucket'   => 'ImageBucket',
        'imageLocation' => 'ImageLocation',
        'imageObject'   => 'ImageObject',
        'result'        => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageBucket) {
            $res['ImageBucket'] = $this->imageBucket;
        }
        if (null !== $this->imageLocation) {
            $res['ImageLocation'] = $this->imageLocation;
        }
        if (null !== $this->imageObject) {
            $res['ImageObject'] = $this->imageObject;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageCensorResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageBucket'])) {
            $model->imageBucket = $map['ImageBucket'];
        }
        if (isset($map['ImageLocation'])) {
            $model->imageLocation = $map['ImageLocation'];
        }
        if (isset($map['ImageObject'])) {
            $model->imageObject = $map['ImageObject'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}

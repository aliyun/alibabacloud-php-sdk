<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\imageCensorResults;

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
    public $result;

    /**
     * @var string
     */
    public $imageLocation;

    /**
     * @var string
     */
    public $imageObject;
    protected $_name = [
        'imageBucket'   => 'ImageBucket',
        'result'        => 'Result',
        'imageLocation' => 'ImageLocation',
        'imageObject'   => 'ImageObject',
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
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->imageLocation) {
            $res['ImageLocation'] = $this->imageLocation;
        }
        if (null !== $this->imageObject) {
            $res['ImageObject'] = $this->imageObject;
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
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ImageLocation'])) {
            $model->imageLocation = $map['ImageLocation'];
        }
        if (isset($map['ImageObject'])) {
            $model->imageObject = $map['ImageObject'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\coverImageCensorResults;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\coverImageCensorResults\coverImageCensorResult\results;
use AlibabaCloud\Tea\Model;

class coverImageCensorResult extends Model
{
    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var results
     */
    public $results;
    protected $_name = [
        'object'   => 'Object',
        'location' => 'Location',
        'bucket'   => 'Bucket',
        'results'  => 'Results',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coverImageCensorResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }

        return $model;
    }
}

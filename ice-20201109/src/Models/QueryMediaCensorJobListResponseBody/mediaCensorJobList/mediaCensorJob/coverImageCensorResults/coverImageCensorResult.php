<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\coverImageCensorResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\coverImageCensorResults\coverImageCensorResult\results;

class coverImageCensorResult extends Model
{
    /**
     * @var string
     */
    public $bucket;
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $object;
    /**
     * @var results
     */
    public $results;
    protected $_name = [
        'bucket'   => 'Bucket',
        'location' => 'Location',
        'object'   => 'Object',
        'results'  => 'Results',
    ];

    public function validate()
    {
        if (null !== $this->results) {
            $this->results->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }

        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toArray($noStream) : $this->results;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }

        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }

        return $model;
    }
}

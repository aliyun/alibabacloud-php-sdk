<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\transcodeOutput\waterMarkList\waterMark;

use AlibabaCloud\Tea\Model;

class inputFile extends Model
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
    protected $_name = [
        'object'   => 'Object',
        'location' => 'Location',
        'bucket'   => 'Bucket',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputFile
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

        return $model;
    }
}

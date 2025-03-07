<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\videoCensorConfig;

use AlibabaCloud\Tea\Model;

class outputFile extends Model
{
    /**
     * @description The OSS bucket in which the output snapshot is stored.
     *
     * @example test-bucket-****
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The ID of the region in which the output snapshot resides.
     *
     * @example oss-cn-shanghai
     *
     * @var string
     */
    public $location;

    /**
     * @description The OSS object that is generated as the output snapshot.
     *
     * >  In the example, {Count} is a placeholder. The OSS objects that are generated as output snapshots are named `output00001-****.jpg, output00002-****.jpg`, and so on.
     * @example output{Count}.jpg
     *
     * @var string
     */
    public $object;
    protected $_name = [
        'bucket'   => 'Bucket',
        'location' => 'Location',
        'object'   => 'Object',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputFile
     */
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

        return $model;
    }
}

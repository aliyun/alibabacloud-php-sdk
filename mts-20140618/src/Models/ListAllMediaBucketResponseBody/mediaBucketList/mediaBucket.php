<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketResponseBody\mediaBucketList;

use AlibabaCloud\Tea\Model;

class mediaBucket extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $bucket;
    protected $_name = [
        'type'   => 'Type',
        'bucket' => 'Bucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaBucket
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        return $model;
    }
}

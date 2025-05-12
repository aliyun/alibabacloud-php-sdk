<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketResponseBody\mediaBucketList\mediaBucket;

class mediaBucketList extends Model
{
    /**
     * @var mediaBucket[]
     */
    public $mediaBucket;
    protected $_name = [
        'mediaBucket' => 'MediaBucket',
    ];

    public function validate()
    {
        if (\is_array($this->mediaBucket)) {
            Model::validateArray($this->mediaBucket);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaBucket) {
            if (\is_array($this->mediaBucket)) {
                $res['MediaBucket'] = [];
                $n1 = 0;
                foreach ($this->mediaBucket as $item1) {
                    $res['MediaBucket'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['MediaBucket'])) {
            if (!empty($map['MediaBucket'])) {
                $model->mediaBucket = [];
                $n1 = 0;
                foreach ($map['MediaBucket'] as $item1) {
                    $model->mediaBucket[$n1++] = mediaBucket::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

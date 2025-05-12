<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketResponseBody\mediaBucketList;

use AlibabaCloud\Dara\Model;

class mediaBucket extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $referer;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bucket' => 'Bucket',
        'referer' => 'Referer',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->referer) {
            $res['Referer'] = $this->referer;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Referer'])) {
            $model->referer = $map['Referer'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

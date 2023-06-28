<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class UntagResourceRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $tagKeys;
    protected $_name = [
        'all'     => 'all',
        'arn'     => 'arn',
        'tagKeys' => 'tagKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }
        if (null !== $this->arn) {
            $res['arn'] = $this->arn;
        }
        if (null !== $this->tagKeys) {
            $res['tagKeys'] = $this->tagKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }
        if (isset($map['arn'])) {
            $model->arn = $map['arn'];
        }
        if (isset($map['tagKeys'])) {
            $model->tagKeys = $map['tagKeys'];
        }

        return $model;
    }
}

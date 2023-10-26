<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class GetAccessChannelOfStagingRequest extends Model
{
    /**
     * @var string
     */
    public $searchPattern;
    protected $_name = [
        'searchPattern' => 'SearchPattern',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchPattern) {
            $res['SearchPattern'] = $this->searchPattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessChannelOfStagingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchPattern'])) {
            $model->searchPattern = $map['SearchPattern'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateBlackIpsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $esIPBlacklist;
    protected $_name = [
        'esIPBlacklist' => 'esIPBlacklist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->esIPBlacklist) {
            $res['esIPBlacklist'] = $this->esIPBlacklist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['esIPBlacklist'])) {
            if (!empty($map['esIPBlacklist'])) {
                $model->esIPBlacklist = $map['esIPBlacklist'];
            }
        }

        return $model;
    }
}

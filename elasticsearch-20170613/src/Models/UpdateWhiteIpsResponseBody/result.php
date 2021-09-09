<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $esIPWhitelist;
    protected $_name = [
        'esIPWhitelist' => 'esIPWhitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->esIPWhitelist) {
            $res['esIPWhitelist'] = $this->esIPWhitelist;
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
        if (isset($map['esIPWhitelist'])) {
            if (!empty($map['esIPWhitelist'])) {
                $model->esIPWhitelist = $map['esIPWhitelist'];
            }
        }

        return $model;
    }
}

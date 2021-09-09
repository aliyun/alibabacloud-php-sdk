<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePublicNetworkResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $enablePublic;
    protected $_name = [
        'enablePublic' => 'enablePublic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enablePublic) {
            $res['enablePublic'] = $this->enablePublic;
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
        if (isset($map['enablePublic'])) {
            $model->enablePublic = $map['enablePublic'];
        }

        return $model;
    }
}

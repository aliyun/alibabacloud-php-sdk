<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest;

use AlibabaCloud\Tea\Model;

class vectorSearchParameter extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $limit;
    protected $_name = [
        'limit' => 'limit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vectorSearchParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        return $model;
    }
}

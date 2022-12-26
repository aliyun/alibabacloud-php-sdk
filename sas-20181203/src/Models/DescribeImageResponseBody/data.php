<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0afb98d97f1a4030782fcf47e186909e5ad957bcc182d8be70334e0684b2****
     *
     * @var string
     */
    public $digest;
    protected $_name = [
        'digest' => 'Digest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }

        return $model;
    }
}

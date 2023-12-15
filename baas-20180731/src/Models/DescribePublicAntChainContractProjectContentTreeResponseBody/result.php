<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribePublicAntChainContractProjectContentTreeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var mixed[][]
     */
    public $children;
    protected $_name = [
        'children' => 'Children',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = $this->children;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = $map['Children'];
            }
        }

        return $model;
    }
}

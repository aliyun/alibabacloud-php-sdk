<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetPipelineRunNodeRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $depth;

    /**
     * @var string
     */
    public $tokenId;

    /**
     * @example Logical
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'depth'   => 'Depth',
        'tokenId' => 'TokenId',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }
        if (null !== $this->tokenId) {
            $res['TokenId'] = $this->tokenId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPipelineRunNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }
        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

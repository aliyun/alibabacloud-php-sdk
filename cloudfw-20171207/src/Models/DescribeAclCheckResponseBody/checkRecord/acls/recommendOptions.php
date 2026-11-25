<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls\recommendOptions\recommendContent;

class recommendOptions extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var recommendContent
     */
    public $recommendContent;
    protected $_name = [
        'actionType' => 'ActionType',
        'recommendContent' => 'RecommendContent',
    ];

    public function validate()
    {
        if (null !== $this->recommendContent) {
            $this->recommendContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->recommendContent) {
            $res['RecommendContent'] = null !== $this->recommendContent ? $this->recommendContent->toArray($noStream) : $this->recommendContent;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['RecommendContent'])) {
            $model->recommendContent = recommendContent::fromMap($map['RecommendContent']);
        }

        return $model;
    }
}

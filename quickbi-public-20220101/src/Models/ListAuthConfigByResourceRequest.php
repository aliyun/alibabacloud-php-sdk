<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class ListAuthConfigByResourceRequest extends Model
{
    /**
     * @var bool
     */
    public $hasAuth;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $shareToType;

    /**
     * @var string
     */
    public $worksType;
    protected $_name = [
        'hasAuth' => 'HasAuth',
        'keyword' => 'Keyword',
        'resourceId' => 'ResourceId',
        'shareToType' => 'ShareToType',
        'worksType' => 'WorksType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasAuth) {
            $res['HasAuth'] = $this->hasAuth;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->shareToType) {
            $res['ShareToType'] = $this->shareToType;
        }

        if (null !== $this->worksType) {
            $res['WorksType'] = $this->worksType;
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
        if (isset($map['HasAuth'])) {
            $model->hasAuth = $map['HasAuth'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ShareToType'])) {
            $model->shareToType = $map['ShareToType'];
        }

        if (isset($map['WorksType'])) {
            $model->worksType = $map['WorksType'];
        }

        return $model;
    }
}

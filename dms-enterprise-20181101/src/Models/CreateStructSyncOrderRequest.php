<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param;
use AlibabaCloud\Tea\Model;

class CreateStructSyncOrderRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int[]
     */
    public $relatedUserList;

    /**
     * @var param
     */
    public $param;
    protected $_name = [
        'comment'         => 'Comment',
        'relatedUserList' => 'RelatedUserList',
        'param'           => 'Param',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->relatedUserList) {
            $res['RelatedUserList'] = $this->relatedUserList;
        }
        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStructSyncOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['RelatedUserList'])) {
            if (!empty($map['RelatedUserList'])) {
                $model->relatedUserList = $map['RelatedUserList'];
            }
        }
        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }

        return $model;
    }
}

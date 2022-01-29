<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListWorkItemWorkFlowStatusRequest extends Model
{
    /**
     * @description 项目id
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @description 空间类型
     *
     * @var string
     */
    public $spaceType;

    /**
     * @description 工作项大类型
     *
     * @var string
     */
    public $workitemCategoryIdentifier;

    /**
     * @description 工作项小类型id
     *
     * @var string
     */
    public $workitemTypeIdentifier;
    protected $_name = [
        'spaceIdentifier'            => 'spaceIdentifier',
        'spaceType'                  => 'spaceType',
        'workitemCategoryIdentifier' => 'workitemCategoryIdentifier',
        'workitemTypeIdentifier'     => 'workitemTypeIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }
        if (null !== $this->spaceType) {
            $res['spaceType'] = $this->spaceType;
        }
        if (null !== $this->workitemCategoryIdentifier) {
            $res['workitemCategoryIdentifier'] = $this->workitemCategoryIdentifier;
        }
        if (null !== $this->workitemTypeIdentifier) {
            $res['workitemTypeIdentifier'] = $this->workitemTypeIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkItemWorkFlowStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }
        if (isset($map['spaceType'])) {
            $model->spaceType = $map['spaceType'];
        }
        if (isset($map['workitemCategoryIdentifier'])) {
            $model->workitemCategoryIdentifier = $map['workitemCategoryIdentifier'];
        }
        if (isset($map['workitemTypeIdentifier'])) {
            $model->workitemTypeIdentifier = $map['workitemTypeIdentifier'];
        }

        return $model;
    }
}

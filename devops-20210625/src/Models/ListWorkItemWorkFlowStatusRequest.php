<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListWorkItemWorkFlowStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 例：5e70xxxxxxcd000xxxxe96
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @description This parameter is required.
     *
     * @example Project
     *
     * @var string
     */
    public $spaceType;

    /**
     * @description This parameter is required.
     *
     * @example Req
     *
     * @var string
     */
    public $workitemCategoryIdentifier;

    /**
     * @example 例：5e7xxxxb3cd3711dd6xxx2c
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

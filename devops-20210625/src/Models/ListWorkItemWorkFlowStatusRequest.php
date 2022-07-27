<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListWorkItemWorkFlowStatusRequest extends Model
{
    /**
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @var string
     */
    public $spaceType;

    /**
     * @var string
     */
    public $workitemCategoryIdentifier;

    /**
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

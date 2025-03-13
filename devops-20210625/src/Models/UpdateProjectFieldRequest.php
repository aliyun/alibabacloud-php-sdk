<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldRequest\updateBasicFieldRequestList;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldRequest\updateForOpenApiList;
use AlibabaCloud\Tea\Model;

class UpdateProjectFieldRequest extends Model
{
    /**
     * @example fdsaadsfasxxxxdddd
     *
     * @var string
     */
    public $statusIdentifier;

    /**
     * @var updateBasicFieldRequestList[]
     */
    public $updateBasicFieldRequestList;

    /**
     * @var updateForOpenApiList[]
     */
    public $updateForOpenApiList;
    protected $_name = [
        'statusIdentifier'            => 'statusIdentifier',
        'updateBasicFieldRequestList' => 'updateBasicFieldRequestList',
        'updateForOpenApiList'        => 'updateForOpenApiList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statusIdentifier) {
            $res['statusIdentifier'] = $this->statusIdentifier;
        }
        if (null !== $this->updateBasicFieldRequestList) {
            $res['updateBasicFieldRequestList'] = [];
            if (null !== $this->updateBasicFieldRequestList && \is_array($this->updateBasicFieldRequestList)) {
                $n = 0;
                foreach ($this->updateBasicFieldRequestList as $item) {
                    $res['updateBasicFieldRequestList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateForOpenApiList) {
            $res['updateForOpenApiList'] = [];
            if (null !== $this->updateForOpenApiList && \is_array($this->updateForOpenApiList)) {
                $n = 0;
                foreach ($this->updateForOpenApiList as $item) {
                    $res['updateForOpenApiList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectFieldRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['statusIdentifier'])) {
            $model->statusIdentifier = $map['statusIdentifier'];
        }
        if (isset($map['updateBasicFieldRequestList'])) {
            if (!empty($map['updateBasicFieldRequestList'])) {
                $model->updateBasicFieldRequestList = [];
                $n                                  = 0;
                foreach ($map['updateBasicFieldRequestList'] as $item) {
                    $model->updateBasicFieldRequestList[$n++] = null !== $item ? updateBasicFieldRequestList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['updateForOpenApiList'])) {
            if (!empty($map['updateForOpenApiList'])) {
                $model->updateForOpenApiList = [];
                $n                           = 0;
                foreach ($map['updateForOpenApiList'] as $item) {
                    $model->updateForOpenApiList[$n++] = null !== $item ? updateForOpenApiList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

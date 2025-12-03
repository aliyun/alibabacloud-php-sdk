<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldRequest\updateBasicFieldRequestList;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldRequest\updateForOpenApiList;

class UpdateProjectFieldRequest extends Model
{
    /**
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
        'statusIdentifier' => 'statusIdentifier',
        'updateBasicFieldRequestList' => 'updateBasicFieldRequestList',
        'updateForOpenApiList' => 'updateForOpenApiList',
    ];

    public function validate()
    {
        if (\is_array($this->updateBasicFieldRequestList)) {
            Model::validateArray($this->updateBasicFieldRequestList);
        }
        if (\is_array($this->updateForOpenApiList)) {
            Model::validateArray($this->updateForOpenApiList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statusIdentifier) {
            $res['statusIdentifier'] = $this->statusIdentifier;
        }

        if (null !== $this->updateBasicFieldRequestList) {
            if (\is_array($this->updateBasicFieldRequestList)) {
                $res['updateBasicFieldRequestList'] = [];
                $n1 = 0;
                foreach ($this->updateBasicFieldRequestList as $item1) {
                    $res['updateBasicFieldRequestList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateForOpenApiList) {
            if (\is_array($this->updateForOpenApiList)) {
                $res['updateForOpenApiList'] = [];
                $n1 = 0;
                foreach ($this->updateForOpenApiList as $item1) {
                    $res['updateForOpenApiList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['statusIdentifier'])) {
            $model->statusIdentifier = $map['statusIdentifier'];
        }

        if (isset($map['updateBasicFieldRequestList'])) {
            if (!empty($map['updateBasicFieldRequestList'])) {
                $model->updateBasicFieldRequestList = [];
                $n1 = 0;
                foreach ($map['updateBasicFieldRequestList'] as $item1) {
                    $model->updateBasicFieldRequestList[$n1] = updateBasicFieldRequestList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updateForOpenApiList'])) {
            if (!empty($map['updateForOpenApiList'])) {
                $model->updateForOpenApiList = [];
                $n1 = 0;
                foreach ($map['updateForOpenApiList'] as $item1) {
                    $model->updateForOpenApiList[$n1] = updateForOpenApiList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

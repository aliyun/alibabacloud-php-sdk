<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadDocRequest\docs;

class UploadDocRequest extends Model
{
    /**
     * @var string
     */
    public $categoryId;
    /**
     * @var docs[]
     */
    public $docs;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryId'  => 'CategoryId',
        'docs'        => 'Docs',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->docs)) {
            Model::validateArray($this->docs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->docs) {
            if (\is_array($this->docs)) {
                $res['Docs'] = [];
                $n1          = 0;
                foreach ($this->docs as $item1) {
                    $res['Docs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['Docs'])) {
            if (!empty($map['Docs'])) {
                $model->docs = [];
                $n1          = 0;
                foreach ($map['Docs'] as $item1) {
                    $model->docs[$n1++] = docs::fromMap($item1);
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

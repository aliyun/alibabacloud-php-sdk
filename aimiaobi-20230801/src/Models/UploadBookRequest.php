<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadBookRequest\docs;
use AlibabaCloud\Tea\Model;

class UploadBookRequest extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @description This parameter is required.
     *
     * @var docs[]
     */
    public $docs;

    /**
     * @description This parameter is required.
     *
     * @example llm-ipe7d81yq4sl5jmk
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'docs' => 'Docs',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->docs) {
            $res['Docs'] = [];
            if (null !== $this->docs && \is_array($this->docs)) {
                $n = 0;
                foreach ($this->docs as $item) {
                    $res['Docs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadBookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Docs'])) {
            if (!empty($map['Docs'])) {
                $model->docs = [];
                $n = 0;
                foreach ($map['Docs'] as $item) {
                    $model->docs[$n++] = null !== $item ? docs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

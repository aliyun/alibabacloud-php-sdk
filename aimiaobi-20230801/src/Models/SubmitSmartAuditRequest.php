<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartAuditRequest\imageUrls;
use AlibabaCloud\Tea\Model;

class SubmitSmartAuditRequest extends Model
{
    /**
     * @var string[]
     */
    public $subCodes;

    /**
     * @var string
     */
    public $text;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @var imageUrls[]
     */
    public $imageUrls;
    protected $_name = [
        'subCodes' => 'SubCodes',
        'text' => 'Text',
        'workspaceId' => 'WorkspaceId',
        'imageUrls' => 'imageUrls',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->subCodes) {
            $res['SubCodes'] = $this->subCodes;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->imageUrls) {
            $res['imageUrls'] = [];
            if (null !== $this->imageUrls && \is_array($this->imageUrls)) {
                $n = 0;
                foreach ($this->imageUrls as $item) {
                    $res['imageUrls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSmartAuditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubCodes'])) {
            if (!empty($map['SubCodes'])) {
                $model->subCodes = $map['SubCodes'];
            }
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['imageUrls'])) {
            if (!empty($map['imageUrls'])) {
                $model->imageUrls = [];
                $n = 0;
                foreach ($map['imageUrls'] as $item) {
                    $model->imageUrls[$n++] = null !== $item ? imageUrls::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartAuditRequest\imageUrlList;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartAuditRequest\imageUrls;

class SubmitSmartAuditRequest extends Model
{
    /**
     * @var imageUrlList[]
     */
    public $imageUrlList;

    /**
     * @var string[]
     */
    public $subCodes;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var imageUrls[]
     */
    public $imageUrls;
    protected $_name = [
        'imageUrlList' => 'ImageUrlList',
        'subCodes' => 'SubCodes',
        'text' => 'Text',
        'workspaceId' => 'WorkspaceId',
        'imageUrls' => 'imageUrls',
    ];

    public function validate()
    {
        if (\is_array($this->imageUrlList)) {
            Model::validateArray($this->imageUrlList);
        }
        if (\is_array($this->subCodes)) {
            Model::validateArray($this->subCodes);
        }
        if (\is_array($this->imageUrls)) {
            Model::validateArray($this->imageUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrlList) {
            if (\is_array($this->imageUrlList)) {
                $res['ImageUrlList'] = [];
                $n1 = 0;
                foreach ($this->imageUrlList as $item1) {
                    $res['ImageUrlList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subCodes) {
            if (\is_array($this->subCodes)) {
                $res['SubCodes'] = [];
                $n1 = 0;
                foreach ($this->subCodes as $item1) {
                    $res['SubCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->imageUrls) {
            if (\is_array($this->imageUrls)) {
                $res['imageUrls'] = [];
                $n1 = 0;
                foreach ($this->imageUrls as $item1) {
                    $res['imageUrls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageUrlList'])) {
            if (!empty($map['ImageUrlList'])) {
                $model->imageUrlList = [];
                $n1 = 0;
                foreach ($map['ImageUrlList'] as $item1) {
                    $model->imageUrlList[$n1] = imageUrlList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SubCodes'])) {
            if (!empty($map['SubCodes'])) {
                $model->subCodes = [];
                $n1 = 0;
                foreach ($map['SubCodes'] as $item1) {
                    $model->subCodes[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['imageUrls'] as $item1) {
                    $model->imageUrls[$n1] = imageUrls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

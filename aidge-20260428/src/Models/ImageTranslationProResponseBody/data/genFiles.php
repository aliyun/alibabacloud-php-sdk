<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data\genFiles\editInfo;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data\genFiles\resultList;

class genFiles extends Model
{
    /**
     * @var editInfo
     */
    public $editInfo;

    /**
     * @var resultList[]
     */
    public $resultList;

    /**
     * @var string
     */
    public $srcImage;
    protected $_name = [
        'editInfo' => 'EditInfo',
        'resultList' => 'ResultList',
        'srcImage' => 'SrcImage',
    ];

    public function validate()
    {
        if (null !== $this->editInfo) {
            $this->editInfo->validate();
        }
        if (\is_array($this->resultList)) {
            Model::validateArray($this->resultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editInfo) {
            $res['EditInfo'] = null !== $this->editInfo ? $this->editInfo->toArray($noStream) : $this->editInfo;
        }

        if (null !== $this->resultList) {
            if (\is_array($this->resultList)) {
                $res['ResultList'] = [];
                $n1 = 0;
                foreach ($this->resultList as $item1) {
                    $res['ResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->srcImage) {
            $res['SrcImage'] = $this->srcImage;
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
        if (isset($map['EditInfo'])) {
            $model->editInfo = editInfo::fromMap($map['EditInfo']);
        }

        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n1 = 0;
                foreach ($map['ResultList'] as $item1) {
                    $model->resultList[$n1] = resultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SrcImage'])) {
            $model->srcImage = $map['SrcImage'];
        }

        return $model;
    }
}

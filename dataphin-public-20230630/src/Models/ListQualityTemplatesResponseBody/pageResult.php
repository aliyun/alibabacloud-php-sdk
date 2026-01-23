<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityTemplatesResponseBody\pageResult\qualityTemplateList;

class pageResult extends Model
{
    /**
     * @var qualityTemplateList[]
     */
    public $qualityTemplateList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'qualityTemplateList' => 'QualityTemplateList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->qualityTemplateList)) {
            Model::validateArray($this->qualityTemplateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualityTemplateList) {
            if (\is_array($this->qualityTemplateList)) {
                $res['QualityTemplateList'] = [];
                $n1 = 0;
                foreach ($this->qualityTemplateList as $item1) {
                    $res['QualityTemplateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['QualityTemplateList'])) {
            if (!empty($map['QualityTemplateList'])) {
                $model->qualityTemplateList = [];
                $n1 = 0;
                foreach ($map['QualityTemplateList'] as $item1) {
                    $model->qualityTemplateList[$n1] = qualityTemplateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

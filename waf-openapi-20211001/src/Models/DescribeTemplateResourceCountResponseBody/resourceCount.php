<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeTemplateResourceCountResponseBody;

use AlibabaCloud\Dara\Model;

class resourceCount extends Model
{
    /**
     * @var int
     */
    public $groupCount;
    /**
     * @var int
     */
    public $singleCount;
    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'groupCount'  => 'GroupCount',
        'singleCount' => 'SingleCount',
        'templateId'  => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }

        if (null !== $this->singleCount) {
            $res['SingleCount'] = $this->singleCount;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }

        if (isset($map['SingleCount'])) {
            $model->singleCount = $map['SingleCount'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}

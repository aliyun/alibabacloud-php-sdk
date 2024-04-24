<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeTemplateResourceCountResponseBody;

use AlibabaCloud\Tea\Model;

class resourceCount extends Model
{
    /**
     * @description The number of protected object groups.
     *
     * @example 30
     *
     * @var int
     */
    public $groupCount;

    /**
     * @description The number of protected objects.
     *
     * @example 30
     *
     * @var int
     */
    public $singleCount;

    /**
     * @description The ID of the protection template.
     *
     * @example 12345
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return resourceCount
     */
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

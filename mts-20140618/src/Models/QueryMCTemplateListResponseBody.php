<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCTemplateListResponseBody\nonExistTids;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCTemplateListResponseBody\templateList;
use AlibabaCloud\Tea\Model;

class QueryMCTemplateListResponseBody extends Model
{
    /**
     * @var nonExistTids
     */
    public $nonExistTids;

    /**
     * @var templateList
     */
    public $templateList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistTids' => 'NonExistTids',
        'templateList' => 'TemplateList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistTids) {
            $res['NonExistTids'] = null !== $this->nonExistTids ? $this->nonExistTids->toMap() : null;
        }
        if (null !== $this->templateList) {
            $res['TemplateList'] = null !== $this->templateList ? $this->templateList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMCTemplateListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistTids'])) {
            $model->nonExistTids = nonExistTids::fromMap($map['NonExistTids']);
        }
        if (isset($map['TemplateList'])) {
            $model->templateList = templateList::fromMap($map['TemplateList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

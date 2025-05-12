<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListResponseBody\nonExistTids;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListResponseBody\templateList;

class QueryTemplateListResponseBody extends Model
{
    /**
     * @var nonExistTids
     */
    public $nonExistTids;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateList
     */
    public $templateList;
    protected $_name = [
        'nonExistTids' => 'NonExistTids',
        'requestId' => 'RequestId',
        'templateList' => 'TemplateList',
    ];

    public function validate()
    {
        if (null !== $this->nonExistTids) {
            $this->nonExistTids->validate();
        }
        if (null !== $this->templateList) {
            $this->templateList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExistTids) {
            $res['NonExistTids'] = null !== $this->nonExistTids ? $this->nonExistTids->toArray($noStream) : $this->nonExistTids;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateList) {
            $res['TemplateList'] = null !== $this->templateList ? $this->templateList->toArray($noStream) : $this->templateList;
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
        if (isset($map['NonExistTids'])) {
            $model->nonExistTids = nonExistTids::fromMap($map['NonExistTids']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TemplateList'])) {
            $model->templateList = templateList::fromMap($map['TemplateList']);
        }

        return $model;
    }
}

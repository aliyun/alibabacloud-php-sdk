<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryWaterMarkTemplateListResponseBody\nonExistWids;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryWaterMarkTemplateListResponseBody\waterMarkTemplateList;

class QueryWaterMarkTemplateListResponseBody extends Model
{
    /**
     * @var nonExistWids
     */
    public $nonExistWids;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var waterMarkTemplateList
     */
    public $waterMarkTemplateList;
    protected $_name = [
        'nonExistWids' => 'NonExistWids',
        'requestId' => 'RequestId',
        'waterMarkTemplateList' => 'WaterMarkTemplateList',
    ];

    public function validate()
    {
        if (null !== $this->nonExistWids) {
            $this->nonExistWids->validate();
        }
        if (null !== $this->waterMarkTemplateList) {
            $this->waterMarkTemplateList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExistWids) {
            $res['NonExistWids'] = null !== $this->nonExistWids ? $this->nonExistWids->toArray($noStream) : $this->nonExistWids;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->waterMarkTemplateList) {
            $res['WaterMarkTemplateList'] = null !== $this->waterMarkTemplateList ? $this->waterMarkTemplateList->toArray($noStream) : $this->waterMarkTemplateList;
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
        if (isset($map['NonExistWids'])) {
            $model->nonExistWids = nonExistWids::fromMap($map['NonExistWids']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WaterMarkTemplateList'])) {
            $model->waterMarkTemplateList = waterMarkTemplateList::fromMap($map['WaterMarkTemplateList']);
        }

        return $model;
    }
}

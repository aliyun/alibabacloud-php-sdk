<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListModelCatalogResponseBody\modelList;

class ListModelCatalogResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var modelList[]
     */
    public $modelList;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'maxResults',
        'modelList' => 'modelList',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->modelList)) {
            Model::validateArray($this->modelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->modelList) {
            if (\is_array($this->modelList)) {
                $res['modelList'] = [];
                $n1 = 0;
                foreach ($this->modelList as $item1) {
                    $res['modelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['modelList'])) {
            if (!empty($map['modelList'])) {
                $model->modelList = [];
                $n1 = 0;
                foreach ($map['modelList'] as $item1) {
                    $model->modelList[$n1] = modelList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

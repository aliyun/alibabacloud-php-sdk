<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryApiKeyListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ApiKeyDTO;

class data extends Model
{
    /**
     * @var ApiKeyDTO[]
     */
    public $list;

    /**
     * @var string
     */
    public $maxResult;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'list' => 'list',
        'maxResult' => 'maxResult',
        'nextToken' => 'nextToken',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['list'] = [];
                $n1 = 0;
                foreach ($this->list as $item1) {
                    $res['list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResult) {
            $res['maxResult'] = $this->maxResult;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n1 = 0;
                foreach ($map['list'] as $item1) {
                    $model->list[$n1] = ApiKeyDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['maxResult'])) {
            $model->maxResult = $map['maxResult'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}

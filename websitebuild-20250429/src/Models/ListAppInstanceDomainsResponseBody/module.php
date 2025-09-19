<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\data;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\next;

class module extends Model
{
    /**
     * @var int
     */
    public $currentPageNum;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var next
     */
    public $next;

    /**
     * @var bool
     */
    public $nextPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $prePage;

    /**
     * @var bool
     */
    public $resultLimit;

    /**
     * @var int
     */
    public $totalItemNum;

    /**
     * @var int
     */
    public $totalPageNum;
    protected $_name = [
        'currentPageNum' => 'CurrentPageNum',
        'data' => 'Data',
        'next' => 'Next',
        'nextPage' => 'NextPage',
        'pageSize' => 'PageSize',
        'prePage' => 'PrePage',
        'resultLimit' => 'ResultLimit',
        'totalItemNum' => 'TotalItemNum',
        'totalPageNum' => 'TotalPageNum',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (null !== $this->next) {
            $this->next->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->next) {
            $res['Next'] = null !== $this->next ? $this->next->toArray($noStream) : $this->next;
        }

        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }

        if (null !== $this->resultLimit) {
            $res['ResultLimit'] = $this->resultLimit;
        }

        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
        }

        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
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
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }

        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Next'])) {
            $model->next = next::fromMap($map['Next']);
        }

        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }

        if (isset($map['ResultLimit'])) {
            $model->resultLimit = $map['ResultLimit'];
        }

        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }

        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
        }

        return $model;
    }
}

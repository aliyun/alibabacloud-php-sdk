<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListWebFilterTemplatesResponseBody\webFilterTemplates;

class ListWebFilterTemplatesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var webFilterTemplates[]
     */
    public $webFilterTemplates;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'webFilterTemplates' => 'WebFilterTemplates',
    ];

    public function validate()
    {
        if (\is_array($this->webFilterTemplates)) {
            Model::validateArray($this->webFilterTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->webFilterTemplates) {
            if (\is_array($this->webFilterTemplates)) {
                $res['WebFilterTemplates'] = [];
                $n1 = 0;
                foreach ($this->webFilterTemplates as $item1) {
                    $res['WebFilterTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WebFilterTemplates'])) {
            if (!empty($map['WebFilterTemplates'])) {
                $model->webFilterTemplates = [];
                $n1 = 0;
                foreach ($map['WebFilterTemplates'] as $item1) {
                    $model->webFilterTemplates[$n1] = webFilterTemplates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

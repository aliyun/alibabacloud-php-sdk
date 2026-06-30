<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListModelOperatorApiKeysResponseBody\apiKeys;

class ListModelOperatorApiKeysResponseBody extends Model
{
    /**
     * @var apiKeys[]
     */
    public $apiKeys;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'apiKeys' => 'ApiKeys',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->apiKeys)) {
            Model::validateArray($this->apiKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeys) {
            if (\is_array($this->apiKeys)) {
                $res['ApiKeys'] = [];
                $n1 = 0;
                foreach ($this->apiKeys as $item1) {
                    $res['ApiKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['ApiKeys'])) {
            if (!empty($map['ApiKeys'])) {
                $model->apiKeys = [];
                $n1 = 0;
                foreach ($map['ApiKeys'] as $item1) {
                    $model->apiKeys[$n1] = apiKeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}

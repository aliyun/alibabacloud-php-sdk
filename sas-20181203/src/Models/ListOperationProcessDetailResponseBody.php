<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessDetailResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessDetailResponseBody\processDetails;

class ListOperationProcessDetailResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var processDetails[]
     */
    public $processDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'processDetails' => 'ProcessDetails',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->processDetails)) {
            Model::validateArray($this->processDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->processDetails) {
            if (\is_array($this->processDetails)) {
                $res['ProcessDetails'] = [];
                $n1 = 0;
                foreach ($this->processDetails as $item1) {
                    $res['ProcessDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['ProcessDetails'])) {
            if (!empty($map['ProcessDetails'])) {
                $model->processDetails = [];
                $n1 = 0;
                foreach ($map['ProcessDetails'] as $item1) {
                    $model->processDetails[$n1] = processDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponseBody\checks;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponseBody\pageInfo;

class ListCheckResultResponseBody extends Model
{
    /**
     * @var checks[]
     */
    public $checks;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checks'    => 'Checks',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->checks)) {
            Model::validateArray($this->checks);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checks) {
            if (\is_array($this->checks)) {
                $res['Checks'] = [];
                $n1            = 0;
                foreach ($this->checks as $item1) {
                    $res['Checks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['Checks'])) {
            if (!empty($map['Checks'])) {
                $model->checks = [];
                $n1            = 0;
                foreach ($map['Checks'] as $item1) {
                    $model->checks[$n1++] = checks::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

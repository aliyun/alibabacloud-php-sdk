<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBMiniEngineVersionsResponseBody\DBRevisionVersionList;

class DescribeDBMiniEngineVersionsResponseBody extends Model
{
    /**
     * @var DBRevisionVersionList[]
     */
    public $DBRevisionVersionList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBRevisionVersionList' => 'DBRevisionVersionList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DBRevisionVersionList)) {
            Model::validateArray($this->DBRevisionVersionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBRevisionVersionList) {
            if (\is_array($this->DBRevisionVersionList)) {
                $res['DBRevisionVersionList'] = [];
                $n1 = 0;
                foreach ($this->DBRevisionVersionList as $item1) {
                    $res['DBRevisionVersionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBRevisionVersionList'])) {
            if (!empty($map['DBRevisionVersionList'])) {
                $model->DBRevisionVersionList = [];
                $n1 = 0;
                foreach ($map['DBRevisionVersionList'] as $item1) {
                    $model->DBRevisionVersionList[$n1] = DBRevisionVersionList::fromMap($item1);
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

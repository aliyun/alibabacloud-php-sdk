<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeAllDBInstanceClassResponseBody\classCodeList;
use AlibabaCloud\Tea\Model;

class DescribeAllDBInstanceClassResponseBody extends Model
{
    /**
     * @description The instance specifications.
     *
     * @var classCodeList[]
     */
    public $classCodeList;

    /**
     * @example 4773E4EC-025D-509F-AEA9-D53123FDFB0F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'classCodeList' => 'ClassCodeList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classCodeList) {
            $res['ClassCodeList'] = [];
            if (null !== $this->classCodeList && \is_array($this->classCodeList)) {
                $n = 0;
                foreach ($this->classCodeList as $item) {
                    $res['ClassCodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllDBInstanceClassResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassCodeList'])) {
            if (!empty($map['ClassCodeList'])) {
                $model->classCodeList = [];
                $n                    = 0;
                foreach ($map['ClassCodeList'] as $item) {
                    $model->classCodeList[$n++] = null !== $item ? classCodeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

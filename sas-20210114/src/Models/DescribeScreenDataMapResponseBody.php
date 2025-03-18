<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody\sasScreenTypeList;
use AlibabaCloud\Tea\Model;

class DescribeScreenDataMapResponseBody extends Model
{
    /**
     * @example 7532B7EE-7CE7-5F4D-BF04-XXXXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sasScreenTypeList[]
     */
    public $sasScreenTypeList;
    protected $_name = [
        'requestId' => 'RequestId',
        'sasScreenTypeList' => 'SasScreenTypeList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sasScreenTypeList) {
            $res['SasScreenTypeList'] = [];
            if (null !== $this->sasScreenTypeList && \is_array($this->sasScreenTypeList)) {
                $n = 0;
                foreach ($this->sasScreenTypeList as $item) {
                    $res['SasScreenTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenDataMapResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SasScreenTypeList'])) {
            if (!empty($map['SasScreenTypeList'])) {
                $model->sasScreenTypeList = [];
                $n = 0;
                foreach ($map['SasScreenTypeList'] as $item) {
                    $model->sasScreenTypeList[$n++] = null !== $item ? sasScreenTypeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

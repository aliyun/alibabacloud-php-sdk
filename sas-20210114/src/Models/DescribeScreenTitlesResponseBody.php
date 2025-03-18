<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenTitlesResponseBody\sasScreenSettingList;
use AlibabaCloud\Tea\Model;

class DescribeScreenTitlesResponseBody extends Model
{
    /**
     * @example 09969D2C-4FAD-429E-BFBF-XXXXXXXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sasScreenSettingList[]
     */
    public $sasScreenSettingList;
    protected $_name = [
        'requestId' => 'RequestId',
        'sasScreenSettingList' => 'SasScreenSettingList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sasScreenSettingList) {
            $res['SasScreenSettingList'] = [];
            if (null !== $this->sasScreenSettingList && \is_array($this->sasScreenSettingList)) {
                $n = 0;
                foreach ($this->sasScreenSettingList as $item) {
                    $res['SasScreenSettingList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenTitlesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SasScreenSettingList'])) {
            if (!empty($map['SasScreenSettingList'])) {
                $model->sasScreenSettingList = [];
                $n = 0;
                foreach ($map['SasScreenSettingList'] as $item) {
                    $model->sasScreenSettingList[$n++] = null !== $item ? sasScreenSettingList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

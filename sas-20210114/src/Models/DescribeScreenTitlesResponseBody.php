<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenTitlesResponseBody\sasScreenSettingList;

class DescribeScreenTitlesResponseBody extends Model
{
    /**
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

    public function validate()
    {
        if (\is_array($this->sasScreenSettingList)) {
            Model::validateArray($this->sasScreenSettingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sasScreenSettingList) {
            if (\is_array($this->sasScreenSettingList)) {
                $res['SasScreenSettingList'] = [];
                $n1 = 0;
                foreach ($this->sasScreenSettingList as $item1) {
                    $res['SasScreenSettingList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SasScreenSettingList'])) {
            if (!empty($map['SasScreenSettingList'])) {
                $model->sasScreenSettingList = [];
                $n1 = 0;
                foreach ($map['SasScreenSettingList'] as $item1) {
                    $model->sasScreenSettingList[$n1] = sasScreenSettingList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

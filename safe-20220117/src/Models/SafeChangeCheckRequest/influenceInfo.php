<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckRequest\influenceInfo\noticeInfos;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckRequest\influenceInfo\sensitiveCustomers;

class influenceInfo extends Model
{
    /**
     * @var noticeInfos[]
     */
    public $noticeInfos;

    /**
     * @var sensitiveCustomers[]
     */
    public $sensitiveCustomers;
    protected $_name = [
        'noticeInfos' => 'NoticeInfos',
        'sensitiveCustomers' => 'SensitiveCustomers',
    ];

    public function validate()
    {
        if (\is_array($this->noticeInfos)) {
            Model::validateArray($this->noticeInfos);
        }
        if (\is_array($this->sensitiveCustomers)) {
            Model::validateArray($this->sensitiveCustomers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->noticeInfos) {
            if (\is_array($this->noticeInfos)) {
                $res['NoticeInfos'] = [];
                $n1 = 0;
                foreach ($this->noticeInfos as $item1) {
                    $res['NoticeInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sensitiveCustomers) {
            if (\is_array($this->sensitiveCustomers)) {
                $res['SensitiveCustomers'] = [];
                $n1 = 0;
                foreach ($this->sensitiveCustomers as $item1) {
                    $res['SensitiveCustomers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NoticeInfos'])) {
            if (!empty($map['NoticeInfos'])) {
                $model->noticeInfos = [];
                $n1 = 0;
                foreach ($map['NoticeInfos'] as $item1) {
                    $model->noticeInfos[$n1] = noticeInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SensitiveCustomers'])) {
            if (!empty($map['SensitiveCustomers'])) {
                $model->sensitiveCustomers = [];
                $n1 = 0;
                foreach ($map['SensitiveCustomers'] as $item1) {
                    $model->sensitiveCustomers[$n1] = sensitiveCustomers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

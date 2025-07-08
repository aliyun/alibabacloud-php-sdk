<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageNewResponseBody\list_\smsPackageInfo;

class list_ extends Model
{
    /**
     * @var smsPackageInfo[]
     */
    public $smsPackageInfo;
    protected $_name = [
        'smsPackageInfo' => 'SmsPackageInfo',
    ];

    public function validate()
    {
        if (\is_array($this->smsPackageInfo)) {
            Model::validateArray($this->smsPackageInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->smsPackageInfo) {
            if (\is_array($this->smsPackageInfo)) {
                $res['SmsPackageInfo'] = [];
                $n1 = 0;
                foreach ($this->smsPackageInfo as $item1) {
                    $res['SmsPackageInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SmsPackageInfo'])) {
            if (!empty($map['SmsPackageInfo'])) {
                $model->smsPackageInfo = [];
                $n1 = 0;
                foreach ($map['SmsPackageInfo'] as $item1) {
                    $model->smsPackageInfo[$n1] = smsPackageInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

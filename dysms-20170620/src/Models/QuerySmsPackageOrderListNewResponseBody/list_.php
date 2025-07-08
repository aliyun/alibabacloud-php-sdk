<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageOrderListNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageOrderListNewResponseBody\list_\smsPackageOrderResponse;

class list_ extends Model
{
    /**
     * @var smsPackageOrderResponse[]
     */
    public $smsPackageOrderResponse;
    protected $_name = [
        'smsPackageOrderResponse' => 'SmsPackageOrderResponse',
    ];

    public function validate()
    {
        if (\is_array($this->smsPackageOrderResponse)) {
            Model::validateArray($this->smsPackageOrderResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->smsPackageOrderResponse) {
            if (\is_array($this->smsPackageOrderResponse)) {
                $res['SmsPackageOrderResponse'] = [];
                $n1 = 0;
                foreach ($this->smsPackageOrderResponse as $item1) {
                    $res['SmsPackageOrderResponse'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SmsPackageOrderResponse'])) {
            if (!empty($map['SmsPackageOrderResponse'])) {
                $model->smsPackageOrderResponse = [];
                $n1 = 0;
                foreach ($map['SmsPackageOrderResponse'] as $item1) {
                    $model->smsPackageOrderResponse[$n1] = smsPackageOrderResponse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

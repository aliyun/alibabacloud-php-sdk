<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsByTemplateNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsByTemplateNewResponseBody\list_\smsStatisticsResponse;

class list_ extends Model
{
    /**
     * @var smsStatisticsResponse[]
     */
    public $smsStatisticsResponse;
    protected $_name = [
        'smsStatisticsResponse' => 'SmsStatisticsResponse',
    ];

    public function validate()
    {
        if (\is_array($this->smsStatisticsResponse)) {
            Model::validateArray($this->smsStatisticsResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->smsStatisticsResponse) {
            if (\is_array($this->smsStatisticsResponse)) {
                $res['SmsStatisticsResponse'] = [];
                $n1 = 0;
                foreach ($this->smsStatisticsResponse as $item1) {
                    $res['SmsStatisticsResponse'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SmsStatisticsResponse'])) {
            if (!empty($map['SmsStatisticsResponse'])) {
                $model->smsStatisticsResponse = [];
                $n1 = 0;
                foreach ($map['SmsStatisticsResponse'] as $item1) {
                    $model->smsStatisticsResponse[$n1] = smsStatisticsResponse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

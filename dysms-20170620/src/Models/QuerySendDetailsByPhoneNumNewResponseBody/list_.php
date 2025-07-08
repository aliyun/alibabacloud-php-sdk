<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendDetailsByPhoneNumNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendDetailsByPhoneNumNewResponseBody\list_\smsSendDetailResponse;

class list_ extends Model
{
    /**
     * @var smsSendDetailResponse[]
     */
    public $smsSendDetailResponse;
    protected $_name = [
        'smsSendDetailResponse' => 'SmsSendDetailResponse',
    ];

    public function validate()
    {
        if (\is_array($this->smsSendDetailResponse)) {
            Model::validateArray($this->smsSendDetailResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->smsSendDetailResponse) {
            if (\is_array($this->smsSendDetailResponse)) {
                $res['SmsSendDetailResponse'] = [];
                $n1 = 0;
                foreach ($this->smsSendDetailResponse as $item1) {
                    $res['SmsSendDetailResponse'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SmsSendDetailResponse'])) {
            if (!empty($map['SmsSendDetailResponse'])) {
                $model->smsSendDetailResponse = [];
                $n1 = 0;
                foreach ($map['SmsSendDetailResponse'] as $item1) {
                    $model->smsSendDetailResponse[$n1] = smsSendDetailResponse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

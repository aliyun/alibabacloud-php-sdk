<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageDetailNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageDetailNewResponseBody\list_\smsPackageDetailDTO;

class list_ extends Model
{
    /**
     * @var smsPackageDetailDTO[]
     */
    public $smsPackageDetailDTO;
    protected $_name = [
        'smsPackageDetailDTO' => 'SmsPackageDetailDTO',
    ];

    public function validate()
    {
        if (\is_array($this->smsPackageDetailDTO)) {
            Model::validateArray($this->smsPackageDetailDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->smsPackageDetailDTO) {
            if (\is_array($this->smsPackageDetailDTO)) {
                $res['SmsPackageDetailDTO'] = [];
                $n1 = 0;
                foreach ($this->smsPackageDetailDTO as $item1) {
                    $res['SmsPackageDetailDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SmsPackageDetailDTO'])) {
            if (!empty($map['SmsPackageDetailDTO'])) {
                $model->smsPackageDetailDTO = [];
                $n1 = 0;
                foreach ($map['SmsPackageDetailDTO'] as $item1) {
                    $model->smsPackageDetailDTO[$n1] = smsPackageDetailDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

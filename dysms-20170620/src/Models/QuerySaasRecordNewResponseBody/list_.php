<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySaasRecordNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySaasRecordNewResponseBody\list_\saasRecord;

class list_ extends Model
{
    /**
     * @var saasRecord[]
     */
    public $saasRecord;
    protected $_name = [
        'saasRecord' => 'SaasRecord',
    ];

    public function validate()
    {
        if (\is_array($this->saasRecord)) {
            Model::validateArray($this->saasRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->saasRecord) {
            if (\is_array($this->saasRecord)) {
                $res['SaasRecord'] = [];
                $n1 = 0;
                foreach ($this->saasRecord as $item1) {
                    $res['SaasRecord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SaasRecord'])) {
            if (!empty($map['SaasRecord'])) {
                $model->saasRecord = [];
                $n1 = 0;
                foreach ($map['SaasRecord'] as $item1) {
                    $model->saasRecord[$n1] = saasRecord::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

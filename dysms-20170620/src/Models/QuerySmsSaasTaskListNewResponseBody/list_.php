<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskListNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskListNewResponseBody\list_\fcSaasTaskDTO;

class list_ extends Model
{
    /**
     * @var fcSaasTaskDTO[]
     */
    public $fcSaasTaskDTO;
    protected $_name = [
        'fcSaasTaskDTO' => 'FcSaasTaskDTO',
    ];

    public function validate()
    {
        if (\is_array($this->fcSaasTaskDTO)) {
            Model::validateArray($this->fcSaasTaskDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fcSaasTaskDTO) {
            if (\is_array($this->fcSaasTaskDTO)) {
                $res['FcSaasTaskDTO'] = [];
                $n1 = 0;
                foreach ($this->fcSaasTaskDTO as $item1) {
                    $res['FcSaasTaskDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FcSaasTaskDTO'])) {
            if (!empty($map['FcSaasTaskDTO'])) {
                $model->fcSaasTaskDTO = [];
                $n1 = 0;
                foreach ($map['FcSaasTaskDTO'] as $item1) {
                    $model->fcSaasTaskDTO[$n1] = fcSaasTaskDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

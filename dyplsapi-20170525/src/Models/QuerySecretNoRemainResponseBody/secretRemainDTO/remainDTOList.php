<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody\secretRemainDTO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody\secretRemainDTO\remainDTOList\remainDTO;

class remainDTOList extends Model
{
    /**
     * @var remainDTO[]
     */
    public $remainDTO;
    protected $_name = [
        'remainDTO' => 'remainDTO',
    ];

    public function validate()
    {
        if (\is_array($this->remainDTO)) {
            Model::validateArray($this->remainDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remainDTO) {
            if (\is_array($this->remainDTO)) {
                $res['remainDTO'] = [];
                $n1 = 0;
                foreach ($this->remainDTO as $item1) {
                    $res['remainDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['remainDTO'])) {
            if (!empty($map['remainDTO'])) {
                $model->remainDTO = [];
                $n1 = 0;
                foreach ($map['remainDTO'] as $item1) {
                    $model->remainDTO[$n1] = remainDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

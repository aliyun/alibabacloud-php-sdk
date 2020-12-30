<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody\secretRemainDTO;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody\secretRemainDTO\remainDTOList\remainDTO;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remainDTO) {
            $res['remainDTO'] = [];
            if (null !== $this->remainDTO && \is_array($this->remainDTO)) {
                $n = 0;
                foreach ($this->remainDTO as $item) {
                    $res['remainDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remainDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['remainDTO'])) {
            if (!empty($map['remainDTO'])) {
                $model->remainDTO = [];
                $n                = 0;
                foreach ($map['remainDTO'] as $item) {
                    $model->remainDTO[$n++] = null !== $item ? remainDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

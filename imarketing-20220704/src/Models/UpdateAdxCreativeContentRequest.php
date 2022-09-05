<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\UpdateAdxCreativeContentRequest\ad;
use AlibabaCloud\Tea\Model;

class UpdateAdxCreativeContentRequest extends Model
{
    /**
     * @var ad[]
     */
    public $ad;

    /**
     * @var string
     */
    public $dspId;
    protected $_name = [
        'ad'    => 'Ad',
        'dspId' => 'DspId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ad) {
            $res['Ad'] = [];
            if (null !== $this->ad && \is_array($this->ad)) {
                $n = 0;
                foreach ($this->ad as $item) {
                    $res['Ad'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dspId) {
            $res['DspId'] = $this->dspId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAdxCreativeContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ad'])) {
            if (!empty($map['Ad'])) {
                $model->ad = [];
                $n         = 0;
                foreach ($map['Ad'] as $item) {
                    $model->ad[$n++] = null !== $item ? ad::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DspId'])) {
            $model->dspId = $map['DspId'];
        }

        return $model;
    }
}

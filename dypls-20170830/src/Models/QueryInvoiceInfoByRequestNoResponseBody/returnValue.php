<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody;

use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponseBody\returnValue\list_;
use AlibabaCloud\Tea\Model;

class returnValue extends Model
{
    /**
     * @var string[]
     */
    public $encryptProps;

    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var string
     */
    public $sign;
    protected $_name = [
        'encryptProps' => 'EncryptProps',
        'list'         => 'List',
        'sign'         => 'Sign',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptProps) {
            $res['EncryptProps'] = $this->encryptProps;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return returnValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptProps'])) {
            $model->encryptProps = $map['EncryptProps'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }

        return $model;
    }
}

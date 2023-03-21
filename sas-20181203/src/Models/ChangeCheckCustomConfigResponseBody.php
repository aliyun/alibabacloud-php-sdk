<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckCustomConfigResponseBody\illegalCustomConfigs;
use AlibabaCloud\Tea\Model;

class ChangeCheckCustomConfigResponseBody extends Model
{
    /**
     * @var illegalCustomConfigs[]
     */
    public $illegalCustomConfigs;

    /**
     * @example DA8133CC-CCA0-5CF2-BF64-FE7D52C44***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'illegalCustomConfigs' => 'IllegalCustomConfigs',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->illegalCustomConfigs) {
            $res['IllegalCustomConfigs'] = [];
            if (null !== $this->illegalCustomConfigs && \is_array($this->illegalCustomConfigs)) {
                $n = 0;
                foreach ($this->illegalCustomConfigs as $item) {
                    $res['IllegalCustomConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeCheckCustomConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IllegalCustomConfigs'])) {
            if (!empty($map['IllegalCustomConfigs'])) {
                $model->illegalCustomConfigs = [];
                $n                           = 0;
                foreach ($map['IllegalCustomConfigs'] as $item) {
                    $model->illegalCustomConfigs[$n++] = null !== $item ? illegalCustomConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

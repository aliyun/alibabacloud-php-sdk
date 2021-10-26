<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest;

use AlibabaCloud\Tea\Model;

class menuKeyMap extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $ttsParams;
    protected $_name = [
        'code'      => 'Code',
        'key'       => 'Key',
        'ttsParams' => 'TtsParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->ttsParams) {
            $res['TtsParams'] = $this->ttsParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return menuKeyMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['TtsParams'])) {
            $model->ttsParams = $map['TtsParams'];
        }

        return $model;
    }
}

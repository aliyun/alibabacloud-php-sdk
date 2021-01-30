<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest;

use AlibabaCloud\Tea\Model;

class menuKeyMap extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $ttsParams;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'key'       => 'Key',
        'ttsParams' => 'TtsParams',
        'code'      => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->ttsParams) {
            $res['TtsParams'] = $this->ttsParams;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['TtsParams'])) {
            $model->ttsParams = $map['TtsParams'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

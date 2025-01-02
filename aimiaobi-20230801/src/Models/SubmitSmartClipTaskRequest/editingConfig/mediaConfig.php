<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig;

use AlibabaCloud\Tea\Model;

class mediaConfig extends Model
{
    /**
     * @var float
     */
    public $volume;
    protected $_name = [
        'volume' => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}

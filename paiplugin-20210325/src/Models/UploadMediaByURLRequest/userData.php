<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models\UploadMediaByURLRequest;

use AlibabaCloud\Tea\Model;

class userData extends Model
{
    /**
     * @var mixed[]
     */
    public $extend;

    /**
     * @var string
     */
    public $messageCallback;
    protected $_name = [
        'extend'          => 'Extend',
        'messageCallback' => 'MessageCallback',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->messageCallback) {
            $res['MessageCallback'] = $this->messageCallback;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['MessageCallback'])) {
            $model->messageCallback = $map['MessageCallback'];
        }

        return $model;
    }
}

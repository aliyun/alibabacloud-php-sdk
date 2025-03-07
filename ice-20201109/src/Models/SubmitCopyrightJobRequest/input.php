<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightJobRequest;

use AlibabaCloud\Tea\Model;

class input extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $media;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'media' => 'Media',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->media) {
            $res['Media'] = $this->media;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return input
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Media'])) {
            $model->media = $map['Media'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

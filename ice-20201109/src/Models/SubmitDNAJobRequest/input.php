<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDNAJobRequest;

use AlibabaCloud\Tea\Model;

class input extends Model
{
    /**
     * @description The input file. The file can be an OSS object or a media asset. You can specify the path of an OSS object in one of the following formats:
     *
     * This parameter is required.
     * @example 1b1b9cd148034739af413150fded****
     *
     * @var string
     */
    public $media;

    /**
     * @description The type of the input file. Valid values:
     *
     * This parameter is required.
     * @example Media
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

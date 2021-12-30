<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;

class KuajingSegRequest extends Model
{
    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $returnPicFormat;

    /**
     * @var string
     */
    public $returnPicType;
    protected $_name = [
        'picUrl'          => 'PicUrl',
        'returnPicFormat' => 'ReturnPicFormat',
        'returnPicType'   => 'ReturnPicType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->returnPicFormat) {
            $res['ReturnPicFormat'] = $this->returnPicFormat;
        }
        if (null !== $this->returnPicType) {
            $res['ReturnPicType'] = $this->returnPicType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KuajingSegRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['ReturnPicFormat'])) {
            $model->returnPicFormat = $map['ReturnPicFormat'];
        }
        if (isset($map['ReturnPicType'])) {
            $model->returnPicType = $map['ReturnPicType'];
        }

        return $model;
    }
}

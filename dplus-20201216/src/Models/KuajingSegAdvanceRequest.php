<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class KuajingSegAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picUrlObject;

    /**
     * @var string
     */
    public $returnPicFormat;

    /**
     * @var string
     */
    public $returnPicType;
    protected $_name = [
        'picUrlObject'    => 'PicUrlObject',
        'returnPicFormat' => 'ReturnPicFormat',
        'returnPicType'   => 'ReturnPicType',
    ];

    public function validate()
    {
        Model::validateRequired('picUrlObject', $this->picUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUrlObject) {
            $res['PicUrlObject'] = $this->picUrlObject;
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
     * @return KuajingSegAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicUrlObject'])) {
            $model->picUrlObject = $map['PicUrlObject'];
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

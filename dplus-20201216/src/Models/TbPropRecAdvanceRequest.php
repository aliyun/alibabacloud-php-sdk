<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class TbPropRecAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picUrlObject;
    protected $_name = [
        'picUrlObject' => 'PicUrlObject',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TbPropRecAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicUrlObject'])) {
            $model->picUrlObject = $map['PicUrlObject'];
        }

        return $model;
    }
}

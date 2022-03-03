<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateRemoveWorkTaskAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picUrlObject;

    /**
     * @var string
     */
    public $itemIdentity;
    protected $_name = [
        'picUrlObject' => 'PicUrlObject',
        'itemIdentity' => 'ItemIdentity',
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
        if (null !== $this->itemIdentity) {
            $res['ItemIdentity'] = $this->itemIdentity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRemoveWorkTaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicUrlObject'])) {
            $model->picUrlObject = $map['PicUrlObject'];
        }
        if (isset($map['ItemIdentity'])) {
            $model->itemIdentity = $map['ItemIdentity'];
        }

        return $model;
    }
}

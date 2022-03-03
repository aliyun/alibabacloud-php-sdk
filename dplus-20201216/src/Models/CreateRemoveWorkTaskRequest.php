<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;

class CreateRemoveWorkTaskRequest extends Model
{
    /**
     * @var string
     */
    public $itemIdentity;

    /**
     * @var string
     */
    public $picUrl;
    protected $_name = [
        'itemIdentity' => 'ItemIdentity',
        'picUrl'       => 'PicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemIdentity) {
            $res['ItemIdentity'] = $this->itemIdentity;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRemoveWorkTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemIdentity'])) {
            $model->itemIdentity = $map['ItemIdentity'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }

        return $model;
    }
}

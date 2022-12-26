<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddTagWithUuidRequest extends Model
{
    /**
     * @example InternetIp
     *
     * @var string
     */
    public $tagName;

    /**
     * @example 71f5313e-4355-4c59-86d1-557dda7b****,71f5313e-4355-4c59-86d1-557dda7b****
     *
     * @var string
     */
    public $uuidList;
    protected $_name = [
        'tagName'  => 'TagName',
        'uuidList' => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTagWithUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['UuidList'])) {
            $model->uuidList = $map['UuidList'];
        }

        return $model;
    }
}

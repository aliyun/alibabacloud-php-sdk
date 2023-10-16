<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SubmitTrademarkApplicationComplaintRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var mixed[]
     */
    public $files;
    protected $_name = [
        'bizId'   => 'BizId',
        'content' => 'Content',
        'files'   => 'Files',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->files) {
            $res['Files'] = $this->files;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTrademarkApplicationComplaintRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Files'])) {
            $model->files = $map['Files'];
        }

        return $model;
    }
}

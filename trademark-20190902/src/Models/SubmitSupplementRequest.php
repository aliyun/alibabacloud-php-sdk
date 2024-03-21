<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class SubmitSupplementRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $supplementId;

    /**
     * @var mixed[]
     */
    public $userFiles;
    protected $_name = [
        'content'      => 'Content',
        'supplementId' => 'SupplementId',
        'userFiles'    => 'UserFiles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->supplementId) {
            $res['SupplementId'] = $this->supplementId;
        }
        if (null !== $this->userFiles) {
            $res['UserFiles'] = $this->userFiles;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSupplementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SupplementId'])) {
            $model->supplementId = $map['SupplementId'];
        }
        if (isset($map['UserFiles'])) {
            $model->userFiles = $map['UserFiles'];
        }

        return $model;
    }
}

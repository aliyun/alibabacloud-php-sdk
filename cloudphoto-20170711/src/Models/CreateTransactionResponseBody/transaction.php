<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreateTransactionResponseBody;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreateTransactionResponseBody\transaction\upload;
use AlibabaCloud\Tea\Model;

class transaction extends Model
{
    /**
     * @var upload
     */
    public $upload;
    protected $_name = [
        'upload' => 'Upload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->upload) {
            $res['Upload'] = null !== $this->upload ? $this->upload->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transaction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Upload'])) {
            $model->upload = upload::fromMap($map['Upload']);
        }

        return $model;
    }
}

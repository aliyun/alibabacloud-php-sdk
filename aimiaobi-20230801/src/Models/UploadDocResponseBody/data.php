<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadDocResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $docIds;

    /**
     * @var string[]
     */
    public $existedIds;
    protected $_name = [
        'docIds' => 'DocIds',
        'existedIds' => 'ExistedIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docIds) {
            $res['DocIds'] = $this->docIds;
        }
        if (null !== $this->existedIds) {
            $res['ExistedIds'] = $this->existedIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocIds'])) {
            if (!empty($map['DocIds'])) {
                $model->docIds = $map['DocIds'];
            }
        }
        if (isset($map['ExistedIds'])) {
            if (!empty($map['ExistedIds'])) {
                $model->existedIds = $map['ExistedIds'];
            }
        }

        return $model;
    }
}

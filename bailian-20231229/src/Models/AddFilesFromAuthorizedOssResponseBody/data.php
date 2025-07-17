<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssResponseBody;

use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssResponseBody\data\addFileResultList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var addFileResultList[]
     */
    public $addFileResultList;
    protected $_name = [
        'addFileResultList' => 'AddFileResultList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addFileResultList) {
            $res['AddFileResultList'] = [];
            if (null !== $this->addFileResultList && \is_array($this->addFileResultList)) {
                $n = 0;
                foreach ($this->addFileResultList as $item) {
                    $res['AddFileResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['AddFileResultList'])) {
            if (!empty($map['AddFileResultList'])) {
                $model->addFileResultList = [];
                $n = 0;
                foreach ($map['AddFileResultList'] as $item) {
                    $model->addFileResultList[$n++] = null !== $item ? addFileResultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

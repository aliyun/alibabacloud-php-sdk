<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssResponseBody\data\addFileResultList;

class data extends Model
{
    /**
     * @var addFileResultList[]
     */
    public $addFileResultList;
    protected $_name = [
        'addFileResultList' => 'AddFileResultList',
    ];

    public function validate()
    {
        if (\is_array($this->addFileResultList)) {
            Model::validateArray($this->addFileResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addFileResultList) {
            if (\is_array($this->addFileResultList)) {
                $res['AddFileResultList'] = [];
                $n1 = 0;
                foreach ($this->addFileResultList as $item1) {
                    $res['AddFileResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddFileResultList'])) {
            if (!empty($map['AddFileResultList'])) {
                $model->addFileResultList = [];
                $n1 = 0;
                foreach ($map['AddFileResultList'] as $item1) {
                    $model->addFileResultList[$n1] = addFileResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

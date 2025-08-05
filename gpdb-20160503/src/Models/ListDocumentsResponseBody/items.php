<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentsResponseBody\items\documentList;

class items extends Model
{
    /**
     * @var documentList[]
     */
    public $documentList;
    protected $_name = [
        'documentList' => 'DocumentList',
    ];

    public function validate()
    {
        if (\is_array($this->documentList)) {
            Model::validateArray($this->documentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentList) {
            if (\is_array($this->documentList)) {
                $res['DocumentList'] = [];
                $n1 = 0;
                foreach ($this->documentList as $item1) {
                    $res['DocumentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DocumentList'])) {
            if (!empty($map['DocumentList'])) {
                $model->documentList = [];
                $n1 = 0;
                foreach ($map['DocumentList'] as $item1) {
                    $model->documentList[$n1] = documentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

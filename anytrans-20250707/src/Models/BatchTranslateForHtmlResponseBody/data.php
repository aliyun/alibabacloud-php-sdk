<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateForHtmlResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateForHtmlResponseBody\data\translationList;

class data extends Model
{
    /**
     * @var translationList[]
     */
    public $translationList;
    protected $_name = [
        'translationList' => 'translationList',
    ];

    public function validate()
    {
        if (\is_array($this->translationList)) {
            Model::validateArray($this->translationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->translationList) {
            if (\is_array($this->translationList)) {
                $res['translationList'] = [];
                $n1 = 0;
                foreach ($this->translationList as $item1) {
                    $res['translationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['translationList'])) {
            if (!empty($map['translationList'])) {
                $model->translationList = [];
                $n1 = 0;
                foreach ($map['translationList'] as $item1) {
                    $model->translationList[$n1] = translationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

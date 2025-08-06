<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdResponseBody\templateList;

class GetTemplateListByUserIdResponseBody extends Model
{
    /**
     * @var int
     */
    public $nextCursor;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateList[]
     */
    public $templateList;
    protected $_name = [
        'nextCursor' => 'nextCursor',
        'requestId' => 'requestId',
        'templateList' => 'templateList',
    ];

    public function validate()
    {
        if (\is_array($this->templateList)) {
            Model::validateArray($this->templateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextCursor) {
            $res['nextCursor'] = $this->nextCursor;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->templateList) {
            if (\is_array($this->templateList)) {
                $res['templateList'] = [];
                $n1 = 0;
                foreach ($this->templateList as $item1) {
                    $res['templateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nextCursor'])) {
            $model->nextCursor = $map['nextCursor'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['templateList'])) {
            if (!empty($map['templateList'])) {
                $model->templateList = [];
                $n1 = 0;
                foreach ($map['templateList'] as $item1) {
                    $model->templateList[$n1] = templateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

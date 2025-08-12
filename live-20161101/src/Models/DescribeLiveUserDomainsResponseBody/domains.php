<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserDomainsResponseBody\domains\pageData;

class domains extends Model
{
    /**
     * @var pageData[]
     */
    public $pageData;
    protected $_name = [
        'pageData' => 'PageData',
    ];

    public function validate()
    {
        if (\is_array($this->pageData)) {
            Model::validateArray($this->pageData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageData) {
            if (\is_array($this->pageData)) {
                $res['PageData'] = [];
                $n1 = 0;
                foreach ($this->pageData as $item1) {
                    $res['PageData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageData'])) {
            if (!empty($map['PageData'])) {
                $model->pageData = [];
                $n1 = 0;
                foreach ($map['PageData'] as $item1) {
                    $model->pageData[$n1] = pageData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

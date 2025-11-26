<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAttackAppCategoryResponseBody\appCategories;

class DescribeAttackAppCategoryResponseBody extends Model
{
    /**
     * @var appCategories[]
     */
    public $appCategories;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appCategories' => 'AppCategories',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->appCategories)) {
            Model::validateArray($this->appCategories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCategories) {
            if (\is_array($this->appCategories)) {
                $res['AppCategories'] = [];
                $n1 = 0;
                foreach ($this->appCategories as $item1) {
                    $res['AppCategories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AppCategories'])) {
            if (!empty($map['AppCategories'])) {
                $model->appCategories = [];
                $n1 = 0;
                foreach ($map['AppCategories'] as $item1) {
                    $model->appCategories[$n1] = appCategories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

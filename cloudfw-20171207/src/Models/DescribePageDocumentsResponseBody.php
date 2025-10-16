<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePageDocumentsResponseBody\docs;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePageDocumentsResponseBody\more;

class DescribePageDocumentsResponseBody extends Model
{
    /**
     * @var docs[]
     */
    public $docs;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $module;

    /**
     * @var more
     */
    public $more;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'docs' => 'Docs',
        'imageUrl' => 'ImageUrl',
        'module' => 'Module',
        'more' => 'More',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->docs)) {
            Model::validateArray($this->docs);
        }
        if (null !== $this->more) {
            $this->more->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docs) {
            if (\is_array($this->docs)) {
                $res['Docs'] = [];
                $n1 = 0;
                foreach ($this->docs as $item1) {
                    $res['Docs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->more) {
            $res['More'] = null !== $this->more ? $this->more->toArray($noStream) : $this->more;
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
        if (isset($map['Docs'])) {
            if (!empty($map['Docs'])) {
                $model->docs = [];
                $n1 = 0;
                foreach ($map['Docs'] as $item1) {
                    $model->docs[$n1] = docs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['More'])) {
            $model->more = more::fromMap($map['More']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

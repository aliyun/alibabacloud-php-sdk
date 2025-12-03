<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\relatedListeners\relatedListener;

class relatedListeners extends Model
{
    /**
     * @var relatedListener[]
     */
    public $relatedListener;
    protected $_name = [
        'relatedListener' => 'RelatedListener',
    ];

    public function validate()
    {
        if (\is_array($this->relatedListener)) {
            Model::validateArray($this->relatedListener);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relatedListener) {
            if (\is_array($this->relatedListener)) {
                $res['RelatedListener'] = [];
                $n1 = 0;
                foreach ($this->relatedListener as $item1) {
                    $res['RelatedListener'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RelatedListener'])) {
            if (!empty($map['RelatedListener'])) {
                $model->relatedListener = [];
                $n1 = 0;
                foreach ($map['RelatedListener'] as $item1) {
                    $model->relatedListener[$n1] = relatedListener::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

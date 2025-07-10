<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponseBody\apps\appAttribute;

class apps extends Model
{
    /**
     * @var appAttribute[]
     */
    public $appAttribute;
    protected $_name = [
        'appAttribute' => 'AppAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->appAttribute)) {
            Model::validateArray($this->appAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appAttribute) {
            if (\is_array($this->appAttribute)) {
                $res['AppAttribute'] = [];
                $n1 = 0;
                foreach ($this->appAttribute as $item1) {
                    $res['AppAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppAttribute'])) {
            if (!empty($map['AppAttribute'])) {
                $model->appAttribute = [];
                $n1 = 0;
                foreach ($map['AppAttribute'] as $item1) {
                    $model->appAttribute[$n1] = appAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

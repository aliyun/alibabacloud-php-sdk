<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponseBody\retcodeAppDataBean;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var \AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponseBody\retcodeAppDataBean\tags\tags[]
     */
    public $tags;
    protected $_name = [
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = \AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponseBody\retcodeAppDataBean\tags\tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

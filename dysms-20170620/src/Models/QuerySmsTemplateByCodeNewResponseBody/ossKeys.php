<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody;

use AlibabaCloud\Dara\Model;

class ossKeys extends Model
{
    /**
     * @var string[]
     */
    public $ossKey;
    protected $_name = [
        'ossKey' => 'OssKey',
    ];

    public function validate()
    {
        if (\is_array($this->ossKey)) {
            Model::validateArray($this->ossKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossKey) {
            if (\is_array($this->ossKey)) {
                $res['OssKey'] = [];
                $n1 = 0;
                foreach ($this->ossKey as $item1) {
                    $res['OssKey'][$n1] = $item1;
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
        if (isset($map['OssKey'])) {
            if (!empty($map['OssKey'])) {
                $model->ossKey = [];
                $n1 = 0;
                foreach ($map['OssKey'] as $item1) {
                    $model->ossKey[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

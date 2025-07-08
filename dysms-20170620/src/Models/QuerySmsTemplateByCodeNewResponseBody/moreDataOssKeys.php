<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody;

use AlibabaCloud\Dara\Model;

class moreDataOssKeys extends Model
{
    /**
     * @var string[]
     */
    public $moreDataOssKey;
    protected $_name = [
        'moreDataOssKey' => 'MoreDataOssKey',
    ];

    public function validate()
    {
        if (\is_array($this->moreDataOssKey)) {
            Model::validateArray($this->moreDataOssKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moreDataOssKey) {
            if (\is_array($this->moreDataOssKey)) {
                $res['MoreDataOssKey'] = [];
                $n1 = 0;
                foreach ($this->moreDataOssKey as $item1) {
                    $res['MoreDataOssKey'][$n1] = $item1;
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
        if (isset($map['MoreDataOssKey'])) {
            if (!empty($map['MoreDataOssKey'])) {
                $model->moreDataOssKey = [];
                $n1 = 0;
                foreach ($map['MoreDataOssKey'] as $item1) {
                    $model->moreDataOssKey[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

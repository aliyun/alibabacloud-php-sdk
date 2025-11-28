<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListAllPrivacyAlgorithmResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $algImplList;

    /**
     * @var string
     */
    public $algType;
    protected $_name = [
        'algImplList' => 'AlgImplList',
        'algType' => 'AlgType',
    ];

    public function validate()
    {
        if (\is_array($this->algImplList)) {
            Model::validateArray($this->algImplList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algImplList) {
            if (\is_array($this->algImplList)) {
                $res['AlgImplList'] = [];
                $n1 = 0;
                foreach ($this->algImplList as $item1) {
                    $res['AlgImplList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->algType) {
            $res['AlgType'] = $this->algType;
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
        if (isset($map['AlgImplList'])) {
            if (!empty($map['AlgImplList'])) {
                $model->algImplList = [];
                $n1 = 0;
                foreach ($map['AlgImplList'] as $item1) {
                    $model->algImplList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlgType'])) {
            $model->algType = $map['AlgType'];
        }

        return $model;
    }
}

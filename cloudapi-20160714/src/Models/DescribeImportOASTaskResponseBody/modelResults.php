<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody\modelResults\modelResult;

class modelResults extends Model
{
    /**
     * @var modelResult[]
     */
    public $modelResult;
    protected $_name = [
        'modelResult' => 'ModelResult',
    ];

    public function validate()
    {
        if (\is_array($this->modelResult)) {
            Model::validateArray($this->modelResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelResult) {
            if (\is_array($this->modelResult)) {
                $res['ModelResult'] = [];
                $n1 = 0;
                foreach ($this->modelResult as $item1) {
                    $res['ModelResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ModelResult'])) {
            if (!empty($map['ModelResult'])) {
                $model->modelResult = [];
                $n1 = 0;
                foreach ($map['ModelResult'] as $item1) {
                    $model->modelResult[$n1] = modelResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

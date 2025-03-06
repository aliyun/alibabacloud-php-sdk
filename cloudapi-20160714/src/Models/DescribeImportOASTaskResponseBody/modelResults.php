<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody\modelResults\modelResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelResult) {
            $res['ModelResult'] = [];
            if (null !== $this->modelResult && \is_array($this->modelResult)) {
                $n = 0;
                foreach ($this->modelResult as $item) {
                    $res['ModelResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelResult'])) {
            if (!empty($map['ModelResult'])) {
                $model->modelResult = [];
                $n                  = 0;
                foreach ($map['ModelResult'] as $item) {
                    $model->modelResult[$n++] = null !== $item ? modelResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successApis\successApi;
use AlibabaCloud\Tea\Model;

class successApis extends Model
{
    /**
     * @var successApi[]
     */
    public $successApi;
    protected $_name = [
        'successApi' => 'SuccessApi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->successApi) {
            $res['SuccessApi'] = [];
            if (null !== $this->successApi && \is_array($this->successApi)) {
                $n = 0;
                foreach ($this->successApi as $item) {
                    $res['SuccessApi'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successApis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuccessApi'])) {
            if (!empty($map['SuccessApi'])) {
                $model->successApi = [];
                $n                 = 0;
                foreach ($map['SuccessApi'] as $item) {
                    $model->successApi[$n++] = null !== $item ? successApi::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

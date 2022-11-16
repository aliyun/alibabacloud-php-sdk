<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\failedApis\failedApi;
use AlibabaCloud\Tea\Model;

class failedApis extends Model
{
    /**
     * @var failedApi[]
     */
    public $failedApi;
    protected $_name = [
        'failedApi' => 'FailedApi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedApi) {
            $res['FailedApi'] = [];
            if (null !== $this->failedApi && \is_array($this->failedApi)) {
                $n = 0;
                foreach ($this->failedApi as $item) {
                    $res['FailedApi'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedApis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedApi'])) {
            if (!empty($map['FailedApi'])) {
                $model->failedApi = [];
                $n                = 0;
                foreach ($map['FailedApi'] as $item) {
                    $model->failedApi[$n++] = null !== $item ? failedApi::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

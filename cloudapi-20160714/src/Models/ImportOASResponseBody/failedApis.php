<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\failedApis\failedApi;

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
        if (\is_array($this->failedApi)) {
            Model::validateArray($this->failedApi);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedApi) {
            if (\is_array($this->failedApi)) {
                $res['FailedApi'] = [];
                $n1               = 0;
                foreach ($this->failedApi as $item1) {
                    $res['FailedApi'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailedApi'])) {
            if (!empty($map['FailedApi'])) {
                $model->failedApi = [];
                $n1               = 0;
                foreach ($map['FailedApi'] as $item1) {
                    $model->failedApi[$n1++] = failedApi::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successApis\successApi;

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
        if (\is_array($this->successApi)) {
            Model::validateArray($this->successApi);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->successApi) {
            if (\is_array($this->successApi)) {
                $res['SuccessApi'] = [];
                $n1 = 0;
                foreach ($this->successApi as $item1) {
                    $res['SuccessApi'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SuccessApi'])) {
            if (!empty($map['SuccessApi'])) {
                $model->successApi = [];
                $n1 = 0;
                foreach ($map['SuccessApi'] as $item1) {
                    $model->successApi[$n1] = successApi::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models;

use AlibabaCloud\Dara\Model;

class QueryIndustryDeviceStatusDataRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $request;
    protected $_name = [
        'request' => 'Request',
    ];

    public function validate()
    {
        if (\is_array($this->request)) {
            Model::validateArray($this->request);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->request) {
            if (\is_array($this->request)) {
                $res['Request'] = [];
                foreach ($this->request as $key1 => $value1) {
                    $res['Request'][$key1] = $value1;
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
        if (isset($map['Request'])) {
            if (!empty($map['Request'])) {
                $model->request = [];
                foreach ($map['Request'] as $key1 => $value1) {
                    $model->request[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

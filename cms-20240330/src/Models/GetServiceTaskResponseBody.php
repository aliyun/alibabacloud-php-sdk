<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetServiceTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $serviceTask;
    protected $_name = [
        'requestId' => 'requestId',
        'serviceTask' => 'serviceTask',
    ];

    public function validate()
    {
        if (\is_array($this->serviceTask)) {
            Model::validateArray($this->serviceTask);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->serviceTask) {
            if (\is_array($this->serviceTask)) {
                $res['serviceTask'] = [];
                foreach ($this->serviceTask as $key1 => $value1) {
                    $res['serviceTask'][$key1] = $value1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['serviceTask'])) {
            if (!empty($map['serviceTask'])) {
                $model->serviceTask = [];
                foreach ($map['serviceTask'] as $key1 => $value1) {
                    $model->serviceTask[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineUserInfoResponseBody\routines;

class GetRoutineUserInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var routines[]
     */
    public $routines;

    /**
     * @var string[]
     */
    public $subdomains;
    protected $_name = [
        'requestId' => 'RequestId',
        'routines' => 'Routines',
        'subdomains' => 'Subdomains',
    ];

    public function validate()
    {
        if (\is_array($this->routines)) {
            Model::validateArray($this->routines);
        }
        if (\is_array($this->subdomains)) {
            Model::validateArray($this->subdomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routines) {
            if (\is_array($this->routines)) {
                $res['Routines'] = [];
                $n1 = 0;
                foreach ($this->routines as $item1) {
                    $res['Routines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->subdomains) {
            if (\is_array($this->subdomains)) {
                $res['Subdomains'] = [];
                $n1 = 0;
                foreach ($this->subdomains as $item1) {
                    $res['Subdomains'][$n1++] = $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Routines'])) {
            if (!empty($map['Routines'])) {
                $model->routines = [];
                $n1 = 0;
                foreach ($map['Routines'] as $item1) {
                    $model->routines[$n1++] = routines::fromMap($item1);
                }
            }
        }

        if (isset($map['Subdomains'])) {
            if (!empty($map['Subdomains'])) {
                $model->subdomains = [];
                $n1 = 0;
                foreach ($map['Subdomains'] as $item1) {
                    $model->subdomains[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

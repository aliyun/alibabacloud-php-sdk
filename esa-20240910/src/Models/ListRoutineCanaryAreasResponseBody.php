<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListRoutineCanaryAreasResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $canaryAreas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'canaryAreas' => 'CanaryAreas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->canaryAreas)) {
            Model::validateArray($this->canaryAreas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canaryAreas) {
            if (\is_array($this->canaryAreas)) {
                $res['CanaryAreas'] = [];
                $n1 = 0;
                foreach ($this->canaryAreas as $item1) {
                    $res['CanaryAreas'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CanaryAreas'])) {
            if (!empty($map['CanaryAreas'])) {
                $model->canaryAreas = [];
                $n1 = 0;
                foreach ($map['CanaryAreas'] as $item1) {
                    $model->canaryAreas[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

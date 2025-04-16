<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListSoftwareForUserDeviceResponseBody\software;

class ListSoftwareForUserDeviceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var software[]
     */
    public $software;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'requestId' => 'RequestId',
        'software' => 'Software',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->software)) {
            Model::validateArray($this->software);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->software) {
            if (\is_array($this->software)) {
                $res['Software'] = [];
                $n1 = 0;
                foreach ($this->software as $item1) {
                    $res['Software'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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

        if (isset($map['Software'])) {
            if (!empty($map['Software'])) {
                $model->software = [];
                $n1 = 0;
                foreach ($map['Software'] as $item1) {
                    $model->software[$n1++] = software::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}

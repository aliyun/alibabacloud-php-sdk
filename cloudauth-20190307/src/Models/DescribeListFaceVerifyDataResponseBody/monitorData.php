<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListFaceVerifyDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListFaceVerifyDataResponseBody\monitorData\faceVerifyData;

class monitorData extends Model
{
    /**
     * @var faceVerifyData[]
     */
    public $faceVerifyData;
    protected $_name = [
        'faceVerifyData' => 'FaceVerifyData',
    ];

    public function validate()
    {
        if (\is_array($this->faceVerifyData)) {
            Model::validateArray($this->faceVerifyData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceVerifyData) {
            if (\is_array($this->faceVerifyData)) {
                $res['FaceVerifyData'] = [];
                $n1 = 0;
                foreach ($this->faceVerifyData as $item1) {
                    $res['FaceVerifyData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FaceVerifyData'])) {
            if (!empty($map['FaceVerifyData'])) {
                $model->faceVerifyData = [];
                $n1 = 0;
                foreach ($map['FaceVerifyData'] as $item1) {
                    $model->faceVerifyData[$n1] = faceVerifyData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

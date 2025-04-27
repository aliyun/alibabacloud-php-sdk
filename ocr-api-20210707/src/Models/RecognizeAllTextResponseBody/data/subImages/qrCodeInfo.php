<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo\qrCodeDetails;

class qrCodeInfo extends Model
{
    /**
     * @var int
     */
    public $qrCodeCount;

    /**
     * @var qrCodeDetails[]
     */
    public $qrCodeDetails;
    protected $_name = [
        'qrCodeCount' => 'QrCodeCount',
        'qrCodeDetails' => 'QrCodeDetails',
    ];

    public function validate()
    {
        if (\is_array($this->qrCodeDetails)) {
            Model::validateArray($this->qrCodeDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qrCodeCount) {
            $res['QrCodeCount'] = $this->qrCodeCount;
        }

        if (null !== $this->qrCodeDetails) {
            if (\is_array($this->qrCodeDetails)) {
                $res['QrCodeDetails'] = [];
                $n1 = 0;
                foreach ($this->qrCodeDetails as $item1) {
                    $res['QrCodeDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QrCodeCount'])) {
            $model->qrCodeCount = $map['QrCodeCount'];
        }

        if (isset($map['QrCodeDetails'])) {
            if (!empty($map['QrCodeDetails'])) {
                $model->qrCodeDetails = [];
                $n1 = 0;
                foreach ($map['QrCodeDetails'] as $item1) {
                    $model->qrCodeDetails[$n1++] = qrCodeDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

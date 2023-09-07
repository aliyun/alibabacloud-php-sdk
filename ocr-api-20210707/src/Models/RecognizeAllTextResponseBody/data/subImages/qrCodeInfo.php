<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo\qrCodeDetails;
use AlibabaCloud\Tea\Model;

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
        'qrCodeCount'   => 'QrCodeCount',
        'qrCodeDetails' => 'QrCodeDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qrCodeCount) {
            $res['QrCodeCount'] = $this->qrCodeCount;
        }
        if (null !== $this->qrCodeDetails) {
            $res['QrCodeDetails'] = [];
            if (null !== $this->qrCodeDetails && \is_array($this->qrCodeDetails)) {
                $n = 0;
                foreach ($this->qrCodeDetails as $item) {
                    $res['QrCodeDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qrCodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QrCodeCount'])) {
            $model->qrCodeCount = $map['QrCodeCount'];
        }
        if (isset($map['QrCodeDetails'])) {
            if (!empty($map['QrCodeDetails'])) {
                $model->qrCodeDetails = [];
                $n                    = 0;
                foreach ($map['QrCodeDetails'] as $item) {
                    $model->qrCodeDetails[$n++] = null !== $item ? qrCodeDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

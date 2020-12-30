<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationRequest\dimensions;
use AlibabaCloud\Tea\Model;

class CreateQuotaApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var float
     */
    public $desireValue;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $noticeType;

    /**
     * @var dimensions[]
     */
    public $dimensions;
    protected $_name = [
        'productCode'     => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'desireValue'     => 'DesireValue',
        'reason'          => 'Reason',
        'noticeType'      => 'NoticeType',
        'dimensions'      => 'Dimensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }
        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQuotaApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }
        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

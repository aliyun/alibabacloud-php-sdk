<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSyntheticProbeListResponseBody\ispCityList;
use AlibabaCloud\Tea\Model;

class DescribeSyntheticProbeListResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var ispCityList[]
     */
    public $ispCityList;

    /**
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @example 87170bc7-e28a-4c93-b9bf-90a1dbe84736
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'        => 'Code',
        'ispCityList' => 'IspCityList',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ispCityList) {
            $res['IspCityList'] = [];
            if (null !== $this->ispCityList && \is_array($this->ispCityList)) {
                $n = 0;
                foreach ($this->ispCityList as $item) {
                    $res['IspCityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSyntheticProbeListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IspCityList'])) {
            if (!empty($map['IspCityList'])) {
                $model->ispCityList = [];
                $n                  = 0;
                foreach ($map['IspCityList'] as $item) {
                    $model->ispCityList[$n++] = null !== $item ? ispCityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecSpecInfoResponseBody\specInfos;
use AlibabaCloud\Tea\Model;

class DescribeDcdnSecSpecInfoResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 32f6cbb7-13e5-403a-9941-4d4e978dd227
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The code and configurations of the security rules.
     *
     * @var specInfos[]
     */
    public $specInfos;

    /**
     * @description The version of secure DCDN.
     *
     * @example enterprise
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'requestId' => 'RequestId',
        'specInfos' => 'SpecInfos',
        'version'   => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->specInfos) {
            $res['SpecInfos'] = [];
            if (null !== $this->specInfos && \is_array($this->specInfos)) {
                $n = 0;
                foreach ($this->specInfos as $item) {
                    $res['SpecInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnSecSpecInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpecInfos'])) {
            if (!empty($map['SpecInfos'])) {
                $model->specInfos = [];
                $n                = 0;
                foreach ($map['SpecInfos'] as $item) {
                    $model->specInfos[$n++] = null !== $item ? specInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

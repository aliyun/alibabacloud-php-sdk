<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsOneConfDataResponseBody\icOneConfDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsOneConfDataResponseBody\ncOneConfDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsOneConfDataResponseBody\nvcOneConfDatas;
use AlibabaCloud\Tea\Model;

class DescribeAfsOneConfDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var icOneConfDatas[]
     */
    public $icOneConfDatas;

    /**
     * @var ncOneConfDatas[]
     */
    public $ncOneConfDatas;

    /**
     * @var nvcOneConfDatas[]
     */
    public $nvcOneConfDatas;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var bool
     */
    public $hasData;
    protected $_name = [
        'requestId'       => 'RequestId',
        'icOneConfDatas'  => 'IcOneConfDatas',
        'ncOneConfDatas'  => 'NcOneConfDatas',
        'nvcOneConfDatas' => 'NvcOneConfDatas',
        'bizCode'         => 'BizCode',
        'hasData'         => 'HasData',
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
        if (null !== $this->icOneConfDatas) {
            $res['IcOneConfDatas'] = [];
            if (null !== $this->icOneConfDatas && \is_array($this->icOneConfDatas)) {
                $n = 0;
                foreach ($this->icOneConfDatas as $item) {
                    $res['IcOneConfDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ncOneConfDatas) {
            $res['NcOneConfDatas'] = [];
            if (null !== $this->ncOneConfDatas && \is_array($this->ncOneConfDatas)) {
                $n = 0;
                foreach ($this->ncOneConfDatas as $item) {
                    $res['NcOneConfDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nvcOneConfDatas) {
            $res['NvcOneConfDatas'] = [];
            if (null !== $this->nvcOneConfDatas && \is_array($this->nvcOneConfDatas)) {
                $n = 0;
                foreach ($this->nvcOneConfDatas as $item) {
                    $res['NvcOneConfDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->hasData) {
            $res['HasData'] = $this->hasData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAfsOneConfDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IcOneConfDatas'])) {
            if (!empty($map['IcOneConfDatas'])) {
                $model->icOneConfDatas = [];
                $n                     = 0;
                foreach ($map['IcOneConfDatas'] as $item) {
                    $model->icOneConfDatas[$n++] = null !== $item ? icOneConfDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NcOneConfDatas'])) {
            if (!empty($map['NcOneConfDatas'])) {
                $model->ncOneConfDatas = [];
                $n                     = 0;
                foreach ($map['NcOneConfDatas'] as $item) {
                    $model->ncOneConfDatas[$n++] = null !== $item ? ncOneConfDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NvcOneConfDatas'])) {
            if (!empty($map['NvcOneConfDatas'])) {
                $model->nvcOneConfDatas = [];
                $n                      = 0;
                foreach ($map['NvcOneConfDatas'] as $item) {
                    $model->nvcOneConfDatas[$n++] = null !== $item ? nvcOneConfDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['HasData'])) {
            $model->hasData = $map['HasData'];
        }

        return $model;
    }
}

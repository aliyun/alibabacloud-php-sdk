<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody\icSecVerifyDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody\icVerifyDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody\ncSigDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody\ncVerifyDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody\nvcCodeDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody\nvcSecDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsVerifySigDataResponseBody\nvcVerifyDatas;
use AlibabaCloud\Tea\Model;

class DescribeAfsVerifySigDataResponseBody extends Model
{
    /**
     * @var nvcCodeDatas[]
     */
    public $nvcCodeDatas;

    /**
     * @var nvcSecDatas[]
     */
    public $nvcSecDatas;

    /**
     * @var icVerifyDatas[]
     */
    public $icVerifyDatas;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ncVerifyDatas[]
     */
    public $ncVerifyDatas;

    /**
     * @var nvcVerifyDatas[]
     */
    public $nvcVerifyDatas;

    /**
     * @var icSecVerifyDatas[]
     */
    public $icSecVerifyDatas;

    /**
     * @var ncSigDatas[]
     */
    public $ncSigDatas;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var bool
     */
    public $hasData;
    protected $_name = [
        'nvcCodeDatas'     => 'NvcCodeDatas',
        'nvcSecDatas'      => 'NvcSecDatas',
        'icVerifyDatas'    => 'IcVerifyDatas',
        'requestId'        => 'RequestId',
        'ncVerifyDatas'    => 'NcVerifyDatas',
        'nvcVerifyDatas'   => 'NvcVerifyDatas',
        'icSecVerifyDatas' => 'IcSecVerifyDatas',
        'ncSigDatas'       => 'NcSigDatas',
        'bizCode'          => 'BizCode',
        'hasData'          => 'HasData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nvcCodeDatas) {
            $res['NvcCodeDatas'] = [];
            if (null !== $this->nvcCodeDatas && \is_array($this->nvcCodeDatas)) {
                $n = 0;
                foreach ($this->nvcCodeDatas as $item) {
                    $res['NvcCodeDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nvcSecDatas) {
            $res['NvcSecDatas'] = [];
            if (null !== $this->nvcSecDatas && \is_array($this->nvcSecDatas)) {
                $n = 0;
                foreach ($this->nvcSecDatas as $item) {
                    $res['NvcSecDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->icVerifyDatas) {
            $res['IcVerifyDatas'] = [];
            if (null !== $this->icVerifyDatas && \is_array($this->icVerifyDatas)) {
                $n = 0;
                foreach ($this->icVerifyDatas as $item) {
                    $res['IcVerifyDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ncVerifyDatas) {
            $res['NcVerifyDatas'] = [];
            if (null !== $this->ncVerifyDatas && \is_array($this->ncVerifyDatas)) {
                $n = 0;
                foreach ($this->ncVerifyDatas as $item) {
                    $res['NcVerifyDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nvcVerifyDatas) {
            $res['NvcVerifyDatas'] = [];
            if (null !== $this->nvcVerifyDatas && \is_array($this->nvcVerifyDatas)) {
                $n = 0;
                foreach ($this->nvcVerifyDatas as $item) {
                    $res['NvcVerifyDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->icSecVerifyDatas) {
            $res['IcSecVerifyDatas'] = [];
            if (null !== $this->icSecVerifyDatas && \is_array($this->icSecVerifyDatas)) {
                $n = 0;
                foreach ($this->icSecVerifyDatas as $item) {
                    $res['IcSecVerifyDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ncSigDatas) {
            $res['NcSigDatas'] = [];
            if (null !== $this->ncSigDatas && \is_array($this->ncSigDatas)) {
                $n = 0;
                foreach ($this->ncSigDatas as $item) {
                    $res['NcSigDatas'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAfsVerifySigDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NvcCodeDatas'])) {
            if (!empty($map['NvcCodeDatas'])) {
                $model->nvcCodeDatas = [];
                $n                   = 0;
                foreach ($map['NvcCodeDatas'] as $item) {
                    $model->nvcCodeDatas[$n++] = null !== $item ? nvcCodeDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NvcSecDatas'])) {
            if (!empty($map['NvcSecDatas'])) {
                $model->nvcSecDatas = [];
                $n                  = 0;
                foreach ($map['NvcSecDatas'] as $item) {
                    $model->nvcSecDatas[$n++] = null !== $item ? nvcSecDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IcVerifyDatas'])) {
            if (!empty($map['IcVerifyDatas'])) {
                $model->icVerifyDatas = [];
                $n                    = 0;
                foreach ($map['IcVerifyDatas'] as $item) {
                    $model->icVerifyDatas[$n++] = null !== $item ? icVerifyDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NcVerifyDatas'])) {
            if (!empty($map['NcVerifyDatas'])) {
                $model->ncVerifyDatas = [];
                $n                    = 0;
                foreach ($map['NcVerifyDatas'] as $item) {
                    $model->ncVerifyDatas[$n++] = null !== $item ? ncVerifyDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NvcVerifyDatas'])) {
            if (!empty($map['NvcVerifyDatas'])) {
                $model->nvcVerifyDatas = [];
                $n                     = 0;
                foreach ($map['NvcVerifyDatas'] as $item) {
                    $model->nvcVerifyDatas[$n++] = null !== $item ? nvcVerifyDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IcSecVerifyDatas'])) {
            if (!empty($map['IcSecVerifyDatas'])) {
                $model->icSecVerifyDatas = [];
                $n                       = 0;
                foreach ($map['IcSecVerifyDatas'] as $item) {
                    $model->icSecVerifyDatas[$n++] = null !== $item ? icSecVerifyDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NcSigDatas'])) {
            if (!empty($map['NcSigDatas'])) {
                $model->ncSigDatas = [];
                $n                 = 0;
                foreach ($map['NcSigDatas'] as $item) {
                    $model->ncSigDatas[$n++] = null !== $item ? ncSigDatas::fromMap($item) : $item;
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

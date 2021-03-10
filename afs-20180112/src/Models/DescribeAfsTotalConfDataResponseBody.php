<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponseBody\icTotalConfBlockDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponseBody\icTotalConfSecVerifyDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponseBody\icTotalConfSigDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponseBody\icTotalConfVerifyDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponseBody\ncTotalConfBlockDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponseBody\ncTotalConfSigDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponseBody\ncTotalConfVerifyDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponseBody\nvcTotalConfSecVerifyDatas;
use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsTotalConfDataResponseBody\nvcTotalConfVerifyDatas;
use AlibabaCloud\Tea\Model;

class DescribeAfsTotalConfDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var icTotalConfSigDatas[]
     */
    public $icTotalConfSigDatas;

    /**
     * @var nvcTotalConfSecVerifyDatas[]
     */
    public $nvcTotalConfSecVerifyDatas;

    /**
     * @var icTotalConfVerifyDatas[]
     */
    public $icTotalConfVerifyDatas;

    /**
     * @var nvcTotalConfVerifyDatas[]
     */
    public $nvcTotalConfVerifyDatas;

    /**
     * @var icTotalConfSecVerifyDatas[]
     */
    public $icTotalConfSecVerifyDatas;

    /**
     * @var ncTotalConfBlockDatas[]
     */
    public $ncTotalConfBlockDatas;

    /**
     * @var icTotalConfBlockDatas[]
     */
    public $icTotalConfBlockDatas;

    /**
     * @var ncTotalConfSigDatas[]
     */
    public $ncTotalConfSigDatas;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var bool
     */
    public $hasData;

    /**
     * @var ncTotalConfVerifyDatas[]
     */
    public $ncTotalConfVerifyDatas;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'icTotalConfSigDatas'        => 'IcTotalConfSigDatas',
        'nvcTotalConfSecVerifyDatas' => 'NvcTotalConfSecVerifyDatas',
        'icTotalConfVerifyDatas'     => 'IcTotalConfVerifyDatas',
        'nvcTotalConfVerifyDatas'    => 'NvcTotalConfVerifyDatas',
        'icTotalConfSecVerifyDatas'  => 'IcTotalConfSecVerifyDatas',
        'ncTotalConfBlockDatas'      => 'NcTotalConfBlockDatas',
        'icTotalConfBlockDatas'      => 'IcTotalConfBlockDatas',
        'ncTotalConfSigDatas'        => 'NcTotalConfSigDatas',
        'bizCode'                    => 'BizCode',
        'hasData'                    => 'HasData',
        'ncTotalConfVerifyDatas'     => 'NcTotalConfVerifyDatas',
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
        if (null !== $this->icTotalConfSigDatas) {
            $res['IcTotalConfSigDatas'] = [];
            if (null !== $this->icTotalConfSigDatas && \is_array($this->icTotalConfSigDatas)) {
                $n = 0;
                foreach ($this->icTotalConfSigDatas as $item) {
                    $res['IcTotalConfSigDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nvcTotalConfSecVerifyDatas) {
            $res['NvcTotalConfSecVerifyDatas'] = [];
            if (null !== $this->nvcTotalConfSecVerifyDatas && \is_array($this->nvcTotalConfSecVerifyDatas)) {
                $n = 0;
                foreach ($this->nvcTotalConfSecVerifyDatas as $item) {
                    $res['NvcTotalConfSecVerifyDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->icTotalConfVerifyDatas) {
            $res['IcTotalConfVerifyDatas'] = [];
            if (null !== $this->icTotalConfVerifyDatas && \is_array($this->icTotalConfVerifyDatas)) {
                $n = 0;
                foreach ($this->icTotalConfVerifyDatas as $item) {
                    $res['IcTotalConfVerifyDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nvcTotalConfVerifyDatas) {
            $res['NvcTotalConfVerifyDatas'] = [];
            if (null !== $this->nvcTotalConfVerifyDatas && \is_array($this->nvcTotalConfVerifyDatas)) {
                $n = 0;
                foreach ($this->nvcTotalConfVerifyDatas as $item) {
                    $res['NvcTotalConfVerifyDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->icTotalConfSecVerifyDatas) {
            $res['IcTotalConfSecVerifyDatas'] = [];
            if (null !== $this->icTotalConfSecVerifyDatas && \is_array($this->icTotalConfSecVerifyDatas)) {
                $n = 0;
                foreach ($this->icTotalConfSecVerifyDatas as $item) {
                    $res['IcTotalConfSecVerifyDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ncTotalConfBlockDatas) {
            $res['NcTotalConfBlockDatas'] = [];
            if (null !== $this->ncTotalConfBlockDatas && \is_array($this->ncTotalConfBlockDatas)) {
                $n = 0;
                foreach ($this->ncTotalConfBlockDatas as $item) {
                    $res['NcTotalConfBlockDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->icTotalConfBlockDatas) {
            $res['IcTotalConfBlockDatas'] = [];
            if (null !== $this->icTotalConfBlockDatas && \is_array($this->icTotalConfBlockDatas)) {
                $n = 0;
                foreach ($this->icTotalConfBlockDatas as $item) {
                    $res['IcTotalConfBlockDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ncTotalConfSigDatas) {
            $res['NcTotalConfSigDatas'] = [];
            if (null !== $this->ncTotalConfSigDatas && \is_array($this->ncTotalConfSigDatas)) {
                $n = 0;
                foreach ($this->ncTotalConfSigDatas as $item) {
                    $res['NcTotalConfSigDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->hasData) {
            $res['HasData'] = $this->hasData;
        }
        if (null !== $this->ncTotalConfVerifyDatas) {
            $res['NcTotalConfVerifyDatas'] = [];
            if (null !== $this->ncTotalConfVerifyDatas && \is_array($this->ncTotalConfVerifyDatas)) {
                $n = 0;
                foreach ($this->ncTotalConfVerifyDatas as $item) {
                    $res['NcTotalConfVerifyDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAfsTotalConfDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IcTotalConfSigDatas'])) {
            if (!empty($map['IcTotalConfSigDatas'])) {
                $model->icTotalConfSigDatas = [];
                $n                          = 0;
                foreach ($map['IcTotalConfSigDatas'] as $item) {
                    $model->icTotalConfSigDatas[$n++] = null !== $item ? icTotalConfSigDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NvcTotalConfSecVerifyDatas'])) {
            if (!empty($map['NvcTotalConfSecVerifyDatas'])) {
                $model->nvcTotalConfSecVerifyDatas = [];
                $n                                 = 0;
                foreach ($map['NvcTotalConfSecVerifyDatas'] as $item) {
                    $model->nvcTotalConfSecVerifyDatas[$n++] = null !== $item ? nvcTotalConfSecVerifyDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IcTotalConfVerifyDatas'])) {
            if (!empty($map['IcTotalConfVerifyDatas'])) {
                $model->icTotalConfVerifyDatas = [];
                $n                             = 0;
                foreach ($map['IcTotalConfVerifyDatas'] as $item) {
                    $model->icTotalConfVerifyDatas[$n++] = null !== $item ? icTotalConfVerifyDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NvcTotalConfVerifyDatas'])) {
            if (!empty($map['NvcTotalConfVerifyDatas'])) {
                $model->nvcTotalConfVerifyDatas = [];
                $n                              = 0;
                foreach ($map['NvcTotalConfVerifyDatas'] as $item) {
                    $model->nvcTotalConfVerifyDatas[$n++] = null !== $item ? nvcTotalConfVerifyDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IcTotalConfSecVerifyDatas'])) {
            if (!empty($map['IcTotalConfSecVerifyDatas'])) {
                $model->icTotalConfSecVerifyDatas = [];
                $n                                = 0;
                foreach ($map['IcTotalConfSecVerifyDatas'] as $item) {
                    $model->icTotalConfSecVerifyDatas[$n++] = null !== $item ? icTotalConfSecVerifyDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NcTotalConfBlockDatas'])) {
            if (!empty($map['NcTotalConfBlockDatas'])) {
                $model->ncTotalConfBlockDatas = [];
                $n                            = 0;
                foreach ($map['NcTotalConfBlockDatas'] as $item) {
                    $model->ncTotalConfBlockDatas[$n++] = null !== $item ? ncTotalConfBlockDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IcTotalConfBlockDatas'])) {
            if (!empty($map['IcTotalConfBlockDatas'])) {
                $model->icTotalConfBlockDatas = [];
                $n                            = 0;
                foreach ($map['IcTotalConfBlockDatas'] as $item) {
                    $model->icTotalConfBlockDatas[$n++] = null !== $item ? icTotalConfBlockDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NcTotalConfSigDatas'])) {
            if (!empty($map['NcTotalConfSigDatas'])) {
                $model->ncTotalConfSigDatas = [];
                $n                          = 0;
                foreach ($map['NcTotalConfSigDatas'] as $item) {
                    $model->ncTotalConfSigDatas[$n++] = null !== $item ? ncTotalConfSigDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['HasData'])) {
            $model->hasData = $map['HasData'];
        }
        if (isset($map['NcTotalConfVerifyDatas'])) {
            if (!empty($map['NcTotalConfVerifyDatas'])) {
                $model->ncTotalConfVerifyDatas = [];
                $n                             = 0;
                foreach ($map['NcTotalConfVerifyDatas'] as $item) {
                    $model->ncTotalConfVerifyDatas[$n++] = null !== $item ? ncTotalConfVerifyDatas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

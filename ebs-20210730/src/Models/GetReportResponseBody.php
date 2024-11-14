<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\GetReportResponseBody\datas;
use AlibabaCloud\Tea\Model;

class GetReportResponseBody extends Model
{
    /**
     * @description Data Details.
     *
     * @var datas[]
     */
    public $datas;

    /**
     * @description Request ID.
     *
     * @example C123F94F-4E38-19AE-942A-A8D6F44F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datas'     => 'Datas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datas) {
            $res['Datas'] = [];
            if (null !== $this->datas && \is_array($this->datas)) {
                $n = 0;
                foreach ($this->datas as $item) {
                    $res['Datas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datas'])) {
            if (!empty($map['Datas'])) {
                $model->datas = [];
                $n            = 0;
                foreach ($map['Datas'] as $item) {
                    $model->datas[$n++] = null !== $item ? datas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

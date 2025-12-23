<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIpcQuotaResponseBody\ipcQuotaInfos;

class QueryIpcQuotaResponseBody extends Model
{
    /**
     * @var ipcQuotaInfos[]
     */
    public $ipcQuotaInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'ipcQuotaInfos' => 'IpcQuotaInfos',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->ipcQuotaInfos)) {
            Model::validateArray($this->ipcQuotaInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipcQuotaInfos) {
            if (\is_array($this->ipcQuotaInfos)) {
                $res['IpcQuotaInfos'] = [];
                $n1 = 0;
                foreach ($this->ipcQuotaInfos as $item1) {
                    $res['IpcQuotaInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['IpcQuotaInfos'])) {
            if (!empty($map['IpcQuotaInfos'])) {
                $model->ipcQuotaInfos = [];
                $n1 = 0;
                foreach ($map['IpcQuotaInfos'] as $item1) {
                    $model->ipcQuotaInfos[$n1] = ipcQuotaInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeProdCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of Alibaba Cloud services.
     *
     * @example 19
     *
     * @var int
     */
    public $aliyunProdCount;

    /**
     * @description The number of Huawei Cloud services.
     *
     * @example 2
     *
     * @var int
     */
    public $hcloudProdCount;

    /**
     * @description The number of Tencent Cloud services.
     *
     * @example 2
     *
     * @var int
     */
    public $qcloudProdCount;
    protected $_name = [
        'aliyunProdCount' => 'AliyunProdCount',
        'hcloudProdCount' => 'HcloudProdCount',
        'qcloudProdCount' => 'QcloudProdCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunProdCount) {
            $res['AliyunProdCount'] = $this->aliyunProdCount;
        }
        if (null !== $this->hcloudProdCount) {
            $res['HcloudProdCount'] = $this->hcloudProdCount;
        }
        if (null !== $this->qcloudProdCount) {
            $res['QcloudProdCount'] = $this->qcloudProdCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunProdCount'])) {
            $model->aliyunProdCount = $map['AliyunProdCount'];
        }
        if (isset($map['HcloudProdCount'])) {
            $model->hcloudProdCount = $map['HcloudProdCount'];
        }
        if (isset($map['QcloudProdCount'])) {
            $model->qcloudProdCount = $map['QcloudProdCount'];
        }

        return $model;
    }
}

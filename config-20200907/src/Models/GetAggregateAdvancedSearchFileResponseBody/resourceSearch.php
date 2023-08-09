<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAdvancedSearchFileResponseBody;

use AlibabaCloud\Tea\Model;

class resourceSearch extends Model
{
    /**
     * @example https://cloud-config-compliance-report.oss-cn-shanghai.aliyuncs.com/RESOURCE_SEARCH/100931896542****\/100931896542****-RESOURCE_SEARCH-202308071033.csv?Expires=1691379221&OSSAccessKeyId=STS.NTo44aif2nS2QzmJkgQ9m****&Signature=L%2BbWqSdQF5fZ6OG%2BYfoBAfx****%3D&security-token=CAISiQJ1q6Ft5B2yfSjIr5faf47VhLkT2ZHZU1zcrmsyXb****%2F%2Blzz2IHhOf3JuAOoWt%2Fk%2Fm2tY5%2FYTlr14T5hYSXvPas1%2B75tg6g67fYvKtpRYDW%2BcfMT3d1KIAjvXgeXwAYygPv6%2FF96pb1fb7FwRpZLxaTSlWXG8LJSNkuQJR98LXw6%2BH1EkbZUsUWkEksIBMmbLPvuAKwPjhnGqbHBloQ1hk2hym8%2Fdq4%2B%2BkkOD0wemkbNK%2BdypfsL9M5ZWUc0hA4vv7otfbbHc1SNc0R9O%2BZptgbZMkTW95YnHWAIPuk%2FWareErYY%2FfV8ofNYzH69Vsf73kvt2u%2BPJmpzw0QpXOuVYQ%2B86lBIna0auGoABrAcsvpRscdC8UY0sotB****%2F5UOR7ZEus3YZrGGprRg2o2dvucjGeySrrU%2FJJJCi8Kz4ib5pll2****%2BMWUAL48i71PqqfKFCErFHv8pVNV33ZIcG9GRKGPnDjjLoRGzcoeTCYZl%2FPWl%2BShyaxC3CjuZh4WuIc3%2Bh2hTKWZ4l6Q%3D
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @example 1691375618130
     *
     * @var int
     */
    public $resourceInventoryGenerateTime;

    /**
     * @example COMPLETE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'downloadUrl'                   => 'DownloadUrl',
        'resourceInventoryGenerateTime' => 'ResourceInventoryGenerateTime',
        'status'                        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->resourceInventoryGenerateTime) {
            $res['ResourceInventoryGenerateTime'] = $this->resourceInventoryGenerateTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceSearch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ResourceInventoryGenerateTime'])) {
            $model->resourceInventoryGenerateTime = $map['ResourceInventoryGenerateTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

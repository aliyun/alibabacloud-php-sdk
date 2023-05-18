<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeCovidTestReportRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $multipleResult;

    /**
     * @example http://duguang-database-public.oss-cn-hangzhou.aliyuncs.com/covid_init_covid_test_report/test_report__data_pool_15a4f85478cb1bd69a5d631b182aba69.jpg_item_0_cls_covid_test_report.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'multipleResult' => 'MultipleResult',
        'url'            => 'Url',
        'body'           => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multipleResult) {
            $res['MultipleResult'] = $this->multipleResult;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeCovidTestReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultipleResult'])) {
            $model->multipleResult = $map['MultipleResult'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}

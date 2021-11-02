<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetWithholdSignPageUrlResponseBody;

use AlibabaCloud\Tea\Model;

class withholdSignResponse extends Model
{
    /**
     * @var string
     */
    public $outRequestNo;

    /**
     * @var string
     */
    public $pageUrl;
    protected $_name = [
        'outRequestNo' => 'OutRequestNo',
        'pageUrl'      => 'PageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }
        if (null !== $this->pageUrl) {
            $res['PageUrl'] = $this->pageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return withholdSignResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }
        if (isset($map['PageUrl'])) {
            $model->pageUrl = $map['PageUrl'];
        }

        return $model;
    }
}

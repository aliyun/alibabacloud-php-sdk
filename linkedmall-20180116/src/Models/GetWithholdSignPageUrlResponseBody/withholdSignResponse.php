<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetWithholdSignPageUrlResponseBody;

use AlibabaCloud\Tea\Model;

class withholdSignResponse extends Model
{
    /**
     * @var string
     */
    public $pageUrl;

    /**
     * @var string
     */
    public $outRequestNo;
    protected $_name = [
        'pageUrl'      => 'PageUrl',
        'outRequestNo' => 'OutRequestNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageUrl) {
            $res['PageUrl'] = $this->pageUrl;
        }
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
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
        if (isset($map['PageUrl'])) {
            $model->pageUrl = $map['PageUrl'];
        }
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }

        return $model;
    }
}

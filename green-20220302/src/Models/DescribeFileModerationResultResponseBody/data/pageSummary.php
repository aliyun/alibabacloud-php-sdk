<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary\imageSummary;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary\textSummary;
use AlibabaCloud\Tea\Model;

class pageSummary extends Model
{
    /**
     * @var imageSummary
     */
    public $imageSummary;

    /**
     * @var int
     */
    public $pageSum;

    /**
     * @var textSummary
     */
    public $textSummary;
    protected $_name = [
        'imageSummary' => 'ImageSummary',
        'pageSum'      => 'PageSum',
        'textSummary'  => 'TextSummary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageSummary) {
            $res['ImageSummary'] = null !== $this->imageSummary ? $this->imageSummary->toMap() : null;
        }
        if (null !== $this->pageSum) {
            $res['PageSum'] = $this->pageSum;
        }
        if (null !== $this->textSummary) {
            $res['TextSummary'] = null !== $this->textSummary ? $this->textSummary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageSummary'])) {
            $model->imageSummary = imageSummary::fromMap($map['ImageSummary']);
        }
        if (isset($map['PageSum'])) {
            $model->pageSum = $map['PageSum'];
        }
        if (isset($map['TextSummary'])) {
            $model->textSummary = textSummary::fromMap($map['TextSummary']);
        }

        return $model;
    }
}

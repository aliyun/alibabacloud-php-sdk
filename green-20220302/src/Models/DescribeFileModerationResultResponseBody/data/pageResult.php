<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult\imageResult;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult\textResult;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var imageResult[]
     */
    public $imageResult;

    /**
     * @example https://detect-obj.oss-cn-hangzhou.aliyuncs.com/sample/xxxx.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @var textResult[]
     */
    public $textResult;

    /**
     * @example https://detect-obj.oss-cn-hangzhou.aliyuncs.com/sample/xxxx.txt
     *
     * @var string
     */
    public $textUrl;
    protected $_name = [
        'imageResult' => 'ImageResult',
        'imageUrl'    => 'ImageUrl',
        'pageNum'     => 'PageNum',
        'textResult'  => 'TextResult',
        'textUrl'     => 'TextUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageResult) {
            $res['ImageResult'] = [];
            if (null !== $this->imageResult && \is_array($this->imageResult)) {
                $n = 0;
                foreach ($this->imageResult as $item) {
                    $res['ImageResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->textResult) {
            $res['TextResult'] = [];
            if (null !== $this->textResult && \is_array($this->textResult)) {
                $n = 0;
                foreach ($this->textResult as $item) {
                    $res['TextResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textUrl) {
            $res['TextUrl'] = $this->textUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageResult'])) {
            if (!empty($map['ImageResult'])) {
                $model->imageResult = [];
                $n                  = 0;
                foreach ($map['ImageResult'] as $item) {
                    $model->imageResult[$n++] = null !== $item ? imageResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['TextResult'])) {
            if (!empty($map['TextResult'])) {
                $model->textResult = [];
                $n                 = 0;
                foreach ($map['TextResult'] as $item) {
                    $model->textResult[$n++] = null !== $item ? textResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TextUrl'])) {
            $model->textUrl = $map['TextUrl'];
        }

        return $model;
    }
}

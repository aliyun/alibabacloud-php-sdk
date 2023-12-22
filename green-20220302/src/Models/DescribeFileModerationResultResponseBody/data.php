<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 26769ada6e264e7ba9aa048241e12be9
     *
     * @var string
     */
    public $dataId;

    /**
     * @example doc
     *
     * @var string
     */
    public $docType;

    /**
     * @var pageResult[]
     */
    public $pageResult;

    /**
     * @example https://detect-obj.oss-cn-hangzhou.aliyuncs.com/sample/xxxx.pdf
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'dataId'     => 'DataId',
        'docType'    => 'DocType',
        'pageResult' => 'PageResult',
        'url'        => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->pageResult) {
            $res['PageResult'] = [];
            if (null !== $this->pageResult && \is_array($this->pageResult)) {
                $n = 0;
                foreach ($this->pageResult as $item) {
                    $res['PageResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }
        if (isset($map['PageResult'])) {
            if (!empty($map['PageResult'])) {
                $model->pageResult = [];
                $n                 = 0;
                foreach ($map['PageResult'] as $item) {
                    $model->pageResult[$n++] = null !== $item ? pageResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

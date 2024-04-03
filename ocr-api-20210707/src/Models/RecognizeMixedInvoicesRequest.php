<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeMixedInvoicesRequest extends Model
{
    /**
     * @var bool
     */
    public $mergePdfPages;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @example https://img.alicdn.com/tfs/TB1.bnGbRWD3KVjSZFsXXcqkpXa-1654-2341.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'mergePdfPages' => 'MergePdfPages',
        'pageNo'        => 'PageNo',
        'url'           => 'Url',
        'body'          => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mergePdfPages) {
            $res['MergePdfPages'] = $this->mergePdfPages;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
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
     * @return RecognizeMixedInvoicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MergePdfPages'])) {
            $model->mergePdfPages = $map['MergePdfPages'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
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

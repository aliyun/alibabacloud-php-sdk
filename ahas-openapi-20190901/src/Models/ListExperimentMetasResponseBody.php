<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListExperimentMetasResponseBody\content;
use AlibabaCloud\Tea\Model;

class ListExperimentMetasResponseBody extends Model
{
    /**
     * @var int
     */
    public $pages;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var content[]
     */
    public $content;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'pages'       => 'Pages',
        'requestId'   => 'RequestId',
        'message'     => 'Message',
        'pageSize'    => 'PageSize',
        'currentPage' => 'CurrentPage',
        'content'     => 'Content',
        'total'       => 'Total',
        'code'        => 'Code',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pages) {
            $res['Pages'] = $this->pages;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->content) {
            $res['Content'] = [];
            if (null !== $this->content && \is_array($this->content)) {
                $n = 0;
                foreach ($this->content as $item) {
                    $res['Content'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExperimentMetasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pages'])) {
            $model->pages = $map['Pages'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n              = 0;
                foreach ($map['Content'] as $item) {
                    $model->content[$n++] = null !== $item ? content::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

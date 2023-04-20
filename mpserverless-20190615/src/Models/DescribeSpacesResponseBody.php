<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSpacesResponseBody\spaces;
use AlibabaCloud\Tea\Model;

class DescribeSpacesResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @example -
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 68B76E59-CC10-5EEC-BCED-73A6C51179BC
     *
     * @var string
     */
    public $requestId;

    /**
     * @var spaces[]
     */
    public $spaces;
    protected $_name = [
        'count'     => 'Count',
        'gmtCreate' => 'GmtCreate',
        'requestId' => 'RequestId',
        'spaces'    => 'Spaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spaces) {
            $res['Spaces'] = [];
            if (null !== $this->spaces && \is_array($this->spaces)) {
                $n = 0;
                foreach ($this->spaces as $item) {
                    $res['Spaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spaces'])) {
            if (!empty($map['Spaces'])) {
                $model->spaces = [];
                $n             = 0;
                foreach ($map['Spaces'] as $item) {
                    $model->spaces[$n++] = null !== $item ? spaces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

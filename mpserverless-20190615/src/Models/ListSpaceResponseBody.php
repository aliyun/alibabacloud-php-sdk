<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSpaceResponseBody\spaces;
use AlibabaCloud\Tea\Model;

class ListSpaceResponseBody extends Model
{
    /**
     * @example 23
     *
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @example B314EDAD-FFCA-536D-BA9C-08B42F7C2DDE
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
     * @return ListSpaceResponseBody
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\ListFlowRequest\page;
use AlibabaCloud\Tea\Model;

class ListFlowRequest extends Model
{
    /**
     * @description The space ID of the user within the independent software vendor (ISV) account.
     *
     * @example 99948484
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The name of the Flow.
     *
     * @example flow_001
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The returned pages.
     *
     * @var page
     */
    public $page;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'flowName'    => 'FlowName',
        'page'        => 'Page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumDataForPageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authentication;

    /**
     * @example true
     *
     * @var string
     */
    public $completion;

    /**
     * @var mixed[][]
     */
    public $items;

    /**
     * @example 1
     *
     * @var string
     */
    public $page;

    /**
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $preference;

    /**
     * @example 7
     *
     * @var string
     */
    public $total;
    protected $_name = [
        'authentication' => 'Authentication',
        'completion'     => 'Completion',
        'items'          => 'Items',
        'page'           => 'Page',
        'pageSize'       => 'PageSize',
        'preference'     => 'Preference',
        'total'          => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authentication) {
            $res['Authentication'] = $this->authentication;
        }
        if (null !== $this->completion) {
            $res['Completion'] = $this->completion;
        }
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Authentication'])) {
            $model->authentication = $map['Authentication'];
        }
        if (isset($map['Completion'])) {
            $model->completion = $map['Completion'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = $map['Items'];
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

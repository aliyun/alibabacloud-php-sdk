<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeAddressBookRequest extends Model
{
    /**
     * @description The port that is included in the address book. This parameter takes effect only when the **GroupType** parameter is set to **port**.
     *
     * @example 80
     *
     * @var string
     */
    public $containPort;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The type of the address book. Valid values:
     *
     * **ip**: IP address book
     * **domain**: domain address book
     * **port**: port address book
     * **tag**: Elastic Compute Service (ECS) tag-based address book
     * **allCloud**: cloud service address book
     * **threat**: threat intelligence address book
     *
     * > If you do not specify a type, the domain address books and ECS tag-based address books are queried.
     * @example ip
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The language of the content within the request. Valid values:
     *
     * **zh**: Chinese (default)
     * **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10. Maximum value: 50.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The query condition that is used to search for the address book.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'containPort' => 'ContainPort',
        'currentPage' => 'CurrentPage',
        'groupType'   => 'GroupType',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'query'       => 'Query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containPort) {
            $res['ContainPort'] = $this->containPort;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddressBookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainPort'])) {
            $model->containPort = $map['ContainPort'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}

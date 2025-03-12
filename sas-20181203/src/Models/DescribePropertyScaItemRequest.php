<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyScaItemRequest extends Model
{
    /**
     * @description The type of the asset fingerprint that you want to query. Default value: **sca**. Valid values:
     *
     *   **sca**: middleware
     *   **sca_database**: database
     *   **sca_web**: web service
     *
     * > If you do not specify this parameter, the default value **sca** is used, which indicates that middleware fingerprints are queried.
     * @example sca
     *
     * @var string
     */
    public $biz;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether to forcefully refresh the data that you want to query. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $forceFlush;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The search keyword. You must specify this parameter based on the value of the **SearchItem** parameter.
     *
     *   If the **SearchItem** parameter is set to **name**, you must enter the name of an asset fingerprint.
     *
     *   If the **SearchItem** parameter is set to **type**, you must enter the type of an asset fingerprint. Valid values:
     *
     *   **system_service**: system service
     *   **software_library**: software library
     *   **docker_component**: container component
     *   **database**: database
     *   **web_container**: web container
     *   **jar**: JAR package
     *   **web_framework**: web framework
     *
     * > You must specify both the **SearchItem** and **SearchInfo** parameters before you can query the asset fingerprints based on the specified name or type.
     * @example system_service
     *
     * @var string
     */
    public $searchInfo;

    /**
     * @description The type of the search condition. Valid values:
     *
     *   **name**: the name of a database, middleware, or web service
     *   **type**: the type of a database, middleware, or web service
     *
     * > You must specify both the **SearchItem** and **SearchInfo** parameters before you can query the asset fingerprints based on the specified name or type.
     * @example type
     *
     * @var string
     */
    public $searchItem;
    protected $_name = [
        'biz'         => 'Biz',
        'currentPage' => 'CurrentPage',
        'forceFlush'  => 'ForceFlush',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'searchInfo'  => 'SearchInfo',
        'searchItem'  => 'SearchItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->forceFlush) {
            $res['ForceFlush'] = $this->forceFlush;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchInfo) {
            $res['SearchInfo'] = $this->searchInfo;
        }
        if (null !== $this->searchItem) {
            $res['SearchItem'] = $this->searchItem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyScaItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ForceFlush'])) {
            $model->forceFlush = $map['ForceFlush'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchInfo'])) {
            $model->searchInfo = $map['SearchInfo'];
        }
        if (isset($map['SearchItem'])) {
            $model->searchItem = $map['SearchItem'];
        }

        return $model;
    }
}

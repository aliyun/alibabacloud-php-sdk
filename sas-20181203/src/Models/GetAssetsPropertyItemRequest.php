<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetAssetsPropertyItemRequest extends Model
{
    /**
     * @description The type of the asset fingerprint that you want to query. Default value: **sca**. Valid values:
     *
     *   **lkm**: kernel module
     *   **autorun**: startup item
     *   **web_server**: website
     *
     * @example lkm
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
     *   zh: Chinese
     *   en: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The value of the search condition. You must specify this parameter based on the value of the **SearchItem** parameter.
     *
     *   If you set **SearchItem** to **domain**, you must enter the domain name.
     *   If you set **SearchItem** to **module_name**, you must enter the module name.
     *   If you set **SearchItem** to **path**, you must enter the path to the self-starting item.
     *
     * >  You must specify both the **SearchItem** and **SearchInfo** parameters before you can query the information about asset fingerprints by asset fingerprint name.
     * @example /lib/systemd/s****
     *
     * @var string
     */
    public $searchInfo;

    /**
     * @description The type of the search condition. You must specify this parameter based on the value of the **Biz** parameter. Valid values:
     *
     *   If you set **Biz** to **web_server**, set **SearchItem** to the following value:
     *
     *   **domain**: the domain name
     *
     *   If you set **Biz** to **lkm**, set **SearchItem** to the following value:
     *
     *   **module_name**: the name of the module
     *
     *   If you set **Biz** to **autorun**, set **SearchItem** to the following value:
     *
     *   **path**: the path to the self-starting item
     *
     * >  You must specify both the **SearchItem** and **SearchInfo** parameters before you can query the information about asset fingerprints by asset fingerprint name.
     * @example path
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
     * @return GetAssetsPropertyItemRequest
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

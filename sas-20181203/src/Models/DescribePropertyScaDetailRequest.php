<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyScaDetailRequest extends Model
{
    /**
     * @description The type of the asset fingerprint that you want to query. Default value: **sca**. Valid values:
     *
     *   **sca**: middleware
     *   **sca_database**: database
     *   **sca_web**: web service
     *
     * >  If you do not specify this parameter, the default value **sca** is used, which indicates that middleware fingerprints are queried.
     * @example sca
     *
     * @var string
     */
    public $biz;

    /**
     * @description The type of the middleware, database, or web service that you want to query. Valid values:
     *
     *   **system_service**: system service
     *   **software_library**: software library
     *   **docker_component**: container component
     *   **database**: database
     *   **web_container**: web container
     *   **jar**: JAR package
     *   **web_framework**: web framework
     *
     * @example system_service
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the middleware, database, or web service.
     *
     * >  This parameter is deprecated. You can ignore it.
     * @example 1
     *
     * @var int
     */
    public $name;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The PID.
     *
     * @example 756
     *
     * @var string
     */
    public $pid;

    /**
     * @description The port that the process monitors.
     *
     * @example 68
     *
     * @var string
     */
    public $port;

    /**
     * @description The timestamp when the process ends. Unit: milliseconds.
     *
     * @example 1641110965
     *
     * @var int
     */
    public $processStartedEnd;

    /**
     * @description The timestamp generated when the process starts. Unit: milliseconds.
     *
     * @example 1641024565
     *
     * @var int
     */
    public $processStartedStart;

    /**
     * @description The search condition, such as a server name or a server IP address.
     *
     * >  Fuzzy match is supported.
     * @example 192.168
     *
     * @var string
     */
    public $remark;

    /**
     * @description The name of the asset fingerprint that you want to query.
     *
     * @example openssl
     *
     * @var string
     */
    public $scaName;

    /**
     * @description The name of the process.
     *
     * @example open
     *
     * @var string
     */
    public $scaNamePattern;

    /**
     * @description The version of the middleware, database, or web service.
     *
     * @example 1.0.2k
     *
     * @var string
     */
    public $scaVersion;

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
     * >  You must specify both the **SearchItem** and **SearchInfo** parameters before you can query the asset fingerprints based on the specified name or type.
     * @example openssl
     *
     * @var string
     */
    public $searchInfo;

    /**
     * @description The keyword of the subquery. You must specify this parameter based on the value of the **SearchItemSub** parameter.
     *
     *   If the **SearchItemSub** parameter is set to **port**, you must enter a port number.
     *   If the **SearchItemSub** parameter is set to **pid**, you must enter a process ID (PID).
     *   If the **SearchItemSub** parameter is set to **version**, you must enter the version of a database, middleware, or web service.
     *   If the **SearchItemSub** parameter is set to **user**, you must enter a username.
     *
     * >  The subquery is used to search for data of a specified database, middleware, or web service.
     * @example 1.0.2k
     *
     * @var string
     */
    public $searchInfoSub;

    /**
     * @description The type of the search condition. Valid values:
     *
     *   **name**: the name of a database, middleware, or web service
     *   **type**: the type of a database, middleware, or web service
     *
     * >  You must specify both the **SearchItem** and **SearchInfo** parameters before you can query the asset fingerprints based on the specified name or type.
     * @example name
     *
     * @var string
     */
    public $searchItem;

    /**
     * @description The type of the subquery. Valid values:
     *
     *   **port**
     *   **pid**
     *   **version**
     *   **user**
     *
     * @example version
     *
     * @var string
     */
    public $searchItemSub;

    /**
     * @description The user who runs the process.
     *
     * @example root
     *
     * @var string
     */
    public $user;

    /**
     * @description The UUID of the server on which the middleware, database, or web service is run.
     *
     * @example uuid-02ebabe7-1c19-ab****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'biz'                 => 'Biz',
        'bizType'             => 'BizType',
        'currentPage'         => 'CurrentPage',
        'lang'                => 'Lang',
        'name'                => 'Name',
        'pageSize'            => 'PageSize',
        'pid'                 => 'Pid',
        'port'                => 'Port',
        'processStartedEnd'   => 'ProcessStartedEnd',
        'processStartedStart' => 'ProcessStartedStart',
        'remark'              => 'Remark',
        'scaName'             => 'ScaName',
        'scaNamePattern'      => 'ScaNamePattern',
        'scaVersion'          => 'ScaVersion',
        'searchInfo'          => 'SearchInfo',
        'searchInfoSub'       => 'SearchInfoSub',
        'searchItem'          => 'SearchItem',
        'searchItemSub'       => 'SearchItemSub',
        'user'                => 'User',
        'uuid'                => 'Uuid',
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
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->processStartedEnd) {
            $res['ProcessStartedEnd'] = $this->processStartedEnd;
        }
        if (null !== $this->processStartedStart) {
            $res['ProcessStartedStart'] = $this->processStartedStart;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->scaName) {
            $res['ScaName'] = $this->scaName;
        }
        if (null !== $this->scaNamePattern) {
            $res['ScaNamePattern'] = $this->scaNamePattern;
        }
        if (null !== $this->scaVersion) {
            $res['ScaVersion'] = $this->scaVersion;
        }
        if (null !== $this->searchInfo) {
            $res['SearchInfo'] = $this->searchInfo;
        }
        if (null !== $this->searchInfoSub) {
            $res['SearchInfoSub'] = $this->searchInfoSub;
        }
        if (null !== $this->searchItem) {
            $res['SearchItem'] = $this->searchItem;
        }
        if (null !== $this->searchItemSub) {
            $res['SearchItemSub'] = $this->searchItemSub;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyScaDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProcessStartedEnd'])) {
            $model->processStartedEnd = $map['ProcessStartedEnd'];
        }
        if (isset($map['ProcessStartedStart'])) {
            $model->processStartedStart = $map['ProcessStartedStart'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ScaName'])) {
            $model->scaName = $map['ScaName'];
        }
        if (isset($map['ScaNamePattern'])) {
            $model->scaNamePattern = $map['ScaNamePattern'];
        }
        if (isset($map['ScaVersion'])) {
            $model->scaVersion = $map['ScaVersion'];
        }
        if (isset($map['SearchInfo'])) {
            $model->searchInfo = $map['SearchInfo'];
        }
        if (isset($map['SearchInfoSub'])) {
            $model->searchInfoSub = $map['SearchInfoSub'];
        }
        if (isset($map['SearchItem'])) {
            $model->searchItem = $map['SearchItem'];
        }
        if (isset($map['SearchItemSub'])) {
            $model->searchItemSub = $map['SearchItemSub'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

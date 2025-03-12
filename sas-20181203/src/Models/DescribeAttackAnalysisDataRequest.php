<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAttackAnalysisDataRequest extends Model
{
    /**
     * @description Specifies whether to encode the value of the **client_url** field in the query results by using the Base64 algorithm. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var string
     */
    public $base64;

    /**
     * @description The number of the page to return. Pages start from page **1**.
     *
     * >  If the Type parameter is set to **DETAILS**, you must specify the CurrentPage parameter.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The condition that is used to filter attack events.
     *
     * >  The following list describes the valid values of crack_type:
     *
     *   3: brute-force attack on MySQL
     *
     *   4: FTP brute-force attack
     *
     *   5: SSH brute-force attack
     *
     *   6: RDP brute-force attack
     *
     *   9: brute-force attack on Microsoft SQL Server
     *
     *   101: intercepted attack on Java Struts 2
     *
     *   102: intercepted attack on Redis
     *
     *   103: communication with AntSword Webshell
     *
     *   104: communication with China Chopper Webshell
     *
     *   133: communication with XISE Webshell
     *
     *   sqli: SQL injection
     *
     *   codei: code execution
     *
     *   xss: cross-site scripting (XSS)
     *
     *   lfi: local file inclusion
     *
     *   rfi: remote file inclusion
     *
     *   webshell: trojan script
     *
     *   upload: vulnerability upload
     *
     *   path: directory traversal
     *
     *   bypass: unauthorized access
     *
     *   csrf: cross-site request forgery (CSRF)
     *
     *   crlf: carriage return line feed (CRLF)
     *
     *   other: others
     *
     * @example {"crack_type":"9"}
     *
     * @var string
     */
    public $data;

    /**
     * @description The timestamp when the attack stops. Unit: seconds.
     *
     * This parameter is required.
     * @example 1649040221
     *
     * @var int
     */
    public $endTime;

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
     * @description The number of entries to return on each page.
     *
     * >  If the Type parameter is set to **DETAILS**, you must specify the PageSize parameter.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The timestamp at which the attack starts. By default, the statistics of the previous seven days are queried. Unit: seconds.
     *
     * This parameter is required.
     * @example 1644027670
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The details of attack analysis. Valid values:
     *
     *   **TOTAL**: number of attacks
     *   **TREND**: attack trend
     *   **PIE_CHART**: distribution of attacks by type
     *   **SOURCE_TOP**: top 5 attack sources
     *   **CLIENT_TOP**: top 5 attacked assets
     *   **DETAILS**: attack details
     *
     * >  If the Type parameter is set to **DETAILS**, you must specify the CurrentPage and PageSize parameters.
     *
     * This parameter is required.
     * @example DETAILS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'base64'      => 'Base64',
        'currentPage' => 'CurrentPage',
        'data'        => 'Data',
        'endTime'     => 'EndTime',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'startTime'   => 'StartTime',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->base64) {
            $res['Base64'] = $this->base64;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAttackAnalysisDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Base64'])) {
            $model->base64 = $map['Base64'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAttackAnalysisDataResponseBody extends Model
{
    /**
     * @description The attack events. The value contains the following fields:
     *
     *   **client_url**: the URL of the attack request.
     *
     *   **internetIp**: the IP address of the asset.
     *
     *   **instanceName**: the name of the asset.
     *
     *   **table_src**: the source of data.
     *
     *   **uuid**: the UUID of the asset.
     *
     *   **crack_method**: the method of the attack request.
     *
     *   **crack_hour**: the attack time.
     *
     *   **crack_src_ip**: the IP address from which the attack is launched.
     *
     *   **instanceId**: the ID of the asset.
     *
     *   **dst_port**: the attacked port.
     *
     *   **client_ip**: the attacked IP address.
     *
     *   **location**: the region from which the attack is launched.
     *
     *   **aliuid**: the ID of the Alibaba Cloud account.
     *
     *   **crack_cnt**: the number of times that the attack is launched.
     *
     *   **crack_type**: the type of the attack. Valid values:
     *
     *   **113**: improper authorization
     *   **112**: redirection attack
     *   **upload**: vulnerability upload
     *   **other**: others
     *   **webshell**: trojan script
     *   **201**: suspicious connection
     *   **9**: brute-force attack on Microsoft SQL Server
     *   **5**: SSH brute-force attack
     *   **6**: RDP brute-force attack
     *   **lfi**: local file inclusion
     *   **7**: code execution
     *   **sqli**: SQL injection
     *   **209**: web attack
     *   **31**: buffer overflow
     *   **3**: brute-force attack on MySQL
     *   **30**: clickjacking
     *   **4**: FTP brute-force attack
     *   **bypass**: unauthorized access
     *   **33**: format string
     *   **deeplearning**: others
     *   **32**: integer overflow
     *   **203**: brute-force attack
     *   **34**: race condition
     *   **rfi**: remote file inclusion
     *   **0**: SQL injection
     *   **212**: mining behavior
     *   **213**: reverse shell
     *   **211**: worm
     *   **61**: session timeout
     *   **20**: directory traversal
     *   **xss**: XSS
     *   **22**: unauthorized access
     *   **21**: scan attack
     *   **24**: file modification
     *   **26**: file deletion
     *   **25**: file reading
     *   **28**: CRLF injection
     *   **27**: logic error
     *   **29**: template injection
     *   **csrf**: CSRF
     *   **path**: directory traversal
     *   **crlf**: CRLF
     *   **102**: CSRF
     *   **103**: server-side request forgery (SSRF)
     *   **101**: XSS
     *   **11**: file inclusion
     *   **10**: file upload
     *   **12**: vulnerability upload
     *   **15**: unauthorized access
     *   **14**: information leakage
     *   **17**: XML entity injection
     *   **16**: insecure configuration
     *   **19**: Lightweight Directory Access Protocol (LDAP) injection
     *   **18**: XPath injection
     *   **codei**: code execution
     *
     * @example [{\\"crack_hour\\":1662480000000,\\"crack_cnt\\":471},{\\"crack_hour\\":1662483600000,\\"crack_cnt\\":461},{\\"crack_hour\\":1662487200000,\\"crack_cnt\\":445},{\\"crack_hour\\":1662490800000,\\"crack_cnt\\":471},{\\"crack_hour\\":1662494400000,\\"crack_cnt\\":534},{\\"crack_hour\\":1662498000000,\\"crack_cnt\\":652},{\\"crack_hour\\":1662501600000,\\"crack_cnt\\":706},{\\"crack_hour\\":1662505200000,\\"crack_cnt\\":613},{\\"crack_hour\\":1662508800000,\\"crack_cnt\\":578},{\\"crack_hour\\":1662512400000,\\"crack_cnt\\":577},{\\"crack_hour\\":1662516000000,\\"crack_cnt\\":616},{\\"crack_hour\\":1662519600000,\\"crack_cnt\\":597},{\\"crack_hour\\":1662523200000,\\"crack_cnt\\":575},{\\"crack_hour\\":1662526800000,\\"crack_cnt\\":507}]
     *
     * @var string
     */
    public $data;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries returned per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 4C1AE3F3-18FA-4108-BBB9-AFA1A032756C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of attack events returned.
     *
     * @example 1000
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'data'      => 'Data',
        'page'      => 'Page',
        'pageSize'  => 'PageSize',
        'requestId' => 'RequestId',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAttackAnalysisDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

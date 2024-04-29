<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectResultResponseBody;

use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @description The status code returned. The status code **200** indicates that the request was successful. Other status codes indicate that the request failed. You can identify the cause of the failure based on the status code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $compress;

    /**
     * @description The extended information about the file detection result.
     *
     * @example {"HighLight":[[23245,23212]]}
     *
     * @var string
     */
    public $ext;

    /**
     * @description The identifier of the file. Only MD5 hash values are supported.
     *
     * @example 0a212417e65c26ff133cfff28f6c****
     *
     * @var string
     */
    public $hashKey;

    /**
     * @description The error message returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The file detection result. Valid values:
     *
     *   **0**: The file is normal.
     *   **1**: The file is suspicious.
     *   **3**: The detection is in progress.
     *
     * @example 0
     *
     * @var int
     */
    public $result;

    /**
     * @description The score of file detection result.
     *
     * > A higher score indicates a more suspicious file.
     * @example 100
     *
     * @var int
     */
    public $score;

    /**
     * @description The type of the virus. Valid values:
     *
     *   **Trojan**: self-mutating trojan
     *   **WebShell**: webshell
     *   **Backdoor**: backdoor program
     *   **RansomWare**: ransomware
     *   **Scanner**: scanner
     *   **Stealer**: tool that is used to steal information
     *   **Malbaseware**: tainted basic software
     *   **Hacktool**: attacker tool
     *   **Engtest**: engine test program
     *   **Downloader**: trojan downloader
     *   **Virus**: infectious virus
     *   **Miner**: mining program
     *   **Worm**: worm
     *   **DDoS**: DDoS trojan
     *   **Malware**: malicious program
     *   **Backdoor**: reverse shell
     *   **RiskWare**: software that has risks
     *   **Proxytool**: proxy
     *   **Suspicious**: suspicious program
     *   **MalScript**: malicious script
     *   **Rootkit**: rootkit
     *   **Exploit**: exploit
     *
     * @example WEBSHELL
     *
     * @var string
     */
    public $virusType;
    protected $_name = [
        'code'      => 'Code',
        'compress'  => 'Compress',
        'ext'       => 'Ext',
        'hashKey'   => 'HashKey',
        'message'   => 'Message',
        'result'    => 'Result',
        'score'     => 'Score',
        'virusType' => 'VirusType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->compress) {
            $res['Compress'] = $this->compress;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->virusType) {
            $res['VirusType'] = $this->virusType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Compress'])) {
            $model->compress = $map['Compress'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['VirusType'])) {
            $model->virusType = $map['VirusType'];
        }

        return $model;
    }
}

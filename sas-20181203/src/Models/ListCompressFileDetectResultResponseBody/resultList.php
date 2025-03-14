<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCompressFileDetectResultResponseBody;

use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @description The extended information about the file detection result.
     *
     * @example {
     * "HighLight":
     * [
     * [
     * 23245,
     * 23212
     * ]
     * ],
     * "FileLabel":
     * [
     * "PE32",
     * "Zip",
     * "SFX",
     * "encrypted"
     * ]
     * }
     *
     * @var string
     */
    public $ext;

    /**
     * @description The identifier of the file.
     *
     * @example 0a212417e65c26ff133cfff28f6c****
     *
     * @var string
     */
    public $hashKey;

    /**
     * @description The path to the file within the package.
     *
     * @example /root/1.zip/test****
     *
     * @var string
     */
    public $path;

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
     * @description The score of the file detection result. The following list describes mappings between the score ranges and risk levels:
     *
     *   0 to 60: normal
     *   61 to 70: risky
     *   71 to 80: suspicious
     *   81 to 100: malicious
     *
     * >  A higher score indicates a more suspicious file.
     *
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
     * @example WebShell
     *
     * @var string
     */
    public $virusType;
    protected $_name = [
        'ext' => 'Ext',
        'hashKey' => 'HashKey',
        'path' => 'Path',
        'result' => 'Result',
        'score' => 'Score',
        'virusType' => 'VirusType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
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

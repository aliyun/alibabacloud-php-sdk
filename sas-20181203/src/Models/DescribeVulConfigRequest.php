<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulConfigRequest extends Model
{
    /**
     * @description The source IP address of the request.
     *
     * @example 113.110.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of configuration. By default, all types of configurations are queried. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability that is detected by using web scanner
     *   **emg**: urgent vulnerability
     *   **scanMode**: displays easily exploitable vulnerability
     *   **imageVulClean**: vulnerability retention duration
     *   **yum**: preferentially uses YUM or APT sources of Alibaba Cloud to fix vulnerabilities
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

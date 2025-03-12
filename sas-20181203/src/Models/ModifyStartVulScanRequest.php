<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyStartVulScanRequest extends Model
{
    /**
     * @description The types of vulnerabilities that can be detected. Valid values:
     *
     *   **cve**: Linux software vulnerabilities
     *   **sys**: Windows system vulnerabilities
     *   **cms**: Web-CMS vulnerabilities
     *   **app**: application vulnerabilities
     *   **emg**: urgent vulnerabilities
     *   **image**: container image vulnerabilities
     *   **sca**: vulnerabilities that are detected based on software component analysis
     *
     * > If you leave this parameter empty, all types of vulnerabilities can be detected.
     * @example "cve,sys,cms,app,emg"
     *
     * @var string
     */
    public $types;

    /**
     * @description The UUIDs of servers.
     *
     * @example {"i-sdada-xxxxx","i-ifaedada-sfsasdxxx"}
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'types' => 'Types',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStartVulScanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddImageVulWhiteListRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Default value: zh. Valid values:
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
     * @description The reason why you add the vulnerability to the whitelist.
     *
     * @example already config in another way
     *
     * @var string
     */
    public $reason;

    /**
     * @description The source of the whitelist. Valid values:
     * - **image**
     * - **agentless**
     * @example image
     *
     * @var string
     */
    public $source;

    /**
     * @description The object on which you want to perform the operation. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **type**: the object type. The value is fixed to repo.
     *   **target**: the object content. The value is in the Namespace/Image repository format.
     *
     * @example {\"type\":\"repo\",\"target\":[\"sas_test/script_0209\",\"sas_test/script\"]}
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: system vulnerability
     *   **sca**: application vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The whitelist. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **Type**: the vulnerability type. Valid values: cve and sca.
     *   **Name**: the name of the vulnerability that is specified in Common Vulnerabilities and Exposures (CVE).
     *   **AliasName**: the alias of the vulnerability that is specified in CVE.
     *
     * @example [{\"Type\":\"sca\",\"Name\":\"imgsca:java:spring-core:AVD-2022-1124599\",\"AliasName\":\"Spring Framework JDK >= 9 (CVE-2022-22965)\"}]
     *
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'lang'      => 'Lang',
        'reason'    => 'Reason',
        'source'    => 'Source',
        'target'    => 'Target',
        'type'      => 'Type',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageVulWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }

        return $model;
    }
}

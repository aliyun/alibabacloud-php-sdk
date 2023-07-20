<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddImageVulWhiteListRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example already config in another way
     *
     * @var string
     */
    public $reason;

    /**
     * @example {\"type\":\"repo\",\"target\":[\"sas_test/script_0209\",\"sas_test/script\"]}
     *
     * @var string
     */
    public $target;

    /**
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @example [{\"Type\":\"sca\",\"Name\":\"imgsca:java:spring-core:AVD-2022-1124599\",\"AliasName\":\"Spring Framework JDK >= 9 (CVE-2022-22965)\"}]
     *
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'lang'      => 'Lang',
        'reason'    => 'Reason',
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
